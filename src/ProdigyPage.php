<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Livewire\Component;
use ProdigyPHP\Prodigy\Actions\AddBlockAction;
use ProdigyPHP\Prodigy\Actions\CreateWelcomePageAction;
use ProdigyPHP\Prodigy\Actions\GetDraftAction;
use ProdigyPHP\Prodigy\Actions\UnparseUrlAction;
use ProdigyPHP\Prodigy\Models\Page;

class ProdigyPage extends Component
{
    use AuthorizesRequests;

    public ?Page $page;

    public ?bool $editing = false;

    public Collection $blocks;

    public array $temp;

    public ?string $page_seo_title;

    public ?string $page_seo_description;

    public ?string $featured_image_url;

    public $cssPath = __DIR__.'/../public/css/prodigy.css';

    public $jsPath = __DIR__.'/../public/js/prodigy.js';

    protected $listeners = ['editBlock' => '$refresh', 'fireGlobalRefresh' => '$refresh', 'openProdigyPanel', 'closeProdigyPanel'];

    public function mount(string $wildcard = null)
    {
        // Show edit screen if user can edit, and has requested edit access.
        $this->editing = Gate::check('viewProdigy', auth()->user()) && request('pro_editing') == 'true';

        $this->page = $this->getPage($wildcard);

        // dynamic routing means we need to not just load for anything.
        if (! $this->page) {
            abort(404);
        }
    }

    /**
     * There are two kinds of routing, wildcard and page-based. This tries to pull
     * in the wildcard route, which would be set in the URL. Otherwise, it just
     * ties it to the particular page, if someone dropped <x-prodigy-page> on
     * the page. We manually add the first slash but request()->path() returns
     * the slash for the home page, only, so we have to figure that out.
     */
    public function getSlug(?string $wildcard): string
    {
        if ($wildcard) {
            // just add the damn slash at the beginning. There should always be a slash at the beginning of URLS.
            if (! str($wildcard)->startsWith('/')) {
                $wildcard = '/'.$wildcard;
            }

            return $wildcard;
        }

        if (request()->path() == '/') {
            return '/';
        }

        return '/'.request()->path();
    }

    /**
     * Either get the public page OR the draft if we're editing.
     */
    public function getPage(string $wildcard = null): Page|null
    {
        $slug = $this->getSlug($wildcard);

        // visitors get the published page or the redirect.
        if (! auth()->check()) {
            return $this->getPageForVisitors($slug);
        }

        return $this->getPageForUsers($slug);
    }

    protected function getPageForVisitors($slug): Page|null
    {
        // Get the first published page we can find at that slug.
        $page = Page::where('slug', $slug)->public()->published()->first();

        // Send back the redirect if there is one.
        if (isset($page->content['redirect_page']) && $page->content['redirect_page']) {
            $this->redirect($page->content['redirect_page']);
        }

        return $page;
    }

    protected function getPageForUsers($slug)
    {
        if ($slug == config('prodigy.home', '/')) {
            // There is special logic for rendering the home page.
            $page = $this->renderHomePage($slug);
        } else {
            // Users can see both published and unpublished pages.
            // As a result, there is no ->published() scope.
            $page = Page::where('slug', $slug)->public()->first();
        }

        // Find or create the draft to edit as an admin.
        if ($this->editing) {
            $page = (new GetDraftAction())->execute($page);
        }

        // return the regular page for regular visitors
        return $page;
    }

    /**
     * The home page is a special one. If there are no pages at all and you try to visit
     * it, the page will render a special welcome mesasge. Otherwise, once it's created,
     * the regular page will appear.
     */
    protected function renderHomePage($slug): Page
    {
        return Page::where('slug', $slug)->firstOr(function () use ($slug) {
            return (new CreateWelcomePageAction())->execute($slug);
        });
    }

    public function addBlock($block_key, $block_order, $column_index = null, $column_order = null)
    {
        Gate::authorize('viewProdigy', auth()->user());
        $blockAdder = (new AddBlockAction())->forPage($this->page)
            ->atPagePosition($block_order)
            ->intoColumn($column_index)
            ->atColumnPosition($column_order);

//        dd($block_order);

        /**
         * Three options for adding blocks:
         * 1. $block_key is a number, so we're reordering
         * 2. $block_key starts with _GLOBAL_ so it's a global block that needs to be attached.
         * 3. $block_key is a keyed path to a block, so it needs to be created.
         */
        $block = DB::transaction(function () use ($block_key, $blockAdder) {
            if (is_numeric($block_key)) {
                return $blockAdder->insertExistingBlockByLinkId($block_key)->execute();
            } elseif (str($block_key)->startsWith('_GLOBAL')) {
                $id = str($block_key)->remove('_GLOBAL_')->toInteger();

                return $blockAdder->attachGlobalBlock($id)->execute();
            } else {
                $block = $blockAdder->createBlockByKey($block_key)->execute();
                $this->emit('editBlock', $block->id); // Open the editor once it's been created.

                return $block;
            }
        });

        // Refresh is required in order to update order on all blocks in the frontend.
        $this->emitSelf('fireGlobalRefresh');
    }

    public function openProdigyPanel()
    {
        Gate::authorize('viewProdigy', auth()->user());

        return $this->toggleProdigyPanel(true);
    }

    public function closeProdigyPanel()
    {
        Gate::authorize('viewProdigy', auth()->user());

        return $this->toggleProdigyPanel(false);
    }

    public function render()
    {
        $this->blocks = $this->page->blocks()->with('children')->withPivot('order', 'id')->orderBy('order', 'asc')->get();

        $this->featured_image_url = $this->getFeaturedImage();
        $this->page_seo_title = $this->getSeoTitle();
        $this->page_seo_description = $this->getDescription();

        $layout = config('prodigy.full_page_layout', 'layouts.app');

        return view('prodigy::prodigy-page')->layout($layout);
    }

    protected function getFeaturedImage()
    {
        $media_collection = $this->page->getMedia('prodigy');

        // Get the social media item
        $featured_image = $media_collection->filter(fn ($media) => $media->getCustomProperty('key') == 'social_image')->first();
        if ($featured_image) {
            return $featured_image->getFullUrl();
        }

        // Fallback to the featured image.
        $featured_image = $media_collection->filter(fn ($media) => $media->getCustomProperty('key') == 'featured_image')->first();
        if ($featured_image) {
            return $featured_image->getFullUrl();
        }

        // fallback to default image or nothing.
        return config('prodigy.seo.default_share_image_url', '');
    }

    protected function getSeoTitle()
    {
        $page_title = '';

        if ($this->page->content && $this->page->content->has('seo_title')) {
            $page_title = $this->page->content['seo_title'];
        }

        if (! $page_title) {
            $page_title = $this->page->title ?? '';
        }

        $separator = config('prodigy.seo.title_separator', ' – ');
        $app_name = config('app.name');

        return ($page_title) ? "{$page_title}{$separator}{$app_name}" : $app_name;
    }

    protected function getDescription()
    {
        $description = '';

        if ($this->page->content && $this->page->content->has('seo_description')) {
            $description = $this->page->content['seo_description'];
        }
        if (! $description) {
            $description = config('prodigy.seo.description', '');
        }

        return  $description;
    }

    /**
     * Toggle the "editing" flag so it edits the page.
     */
    protected function toggleProdigyPanel(bool $startEditing = true)
    {
        $url = Str::of(request()->header('Referer'));
        $parsed_url = parse_url($url);

        // If we already have a query, we have extra logic to do....
        if (isset($parsed_url['query'])) {
            // Convert query params into an array
            parse_str($parsed_url['query'], $query_params);

            // Update the array property
            $query_params['pro_editing'] = ($startEditing) ? 'true' : 'false';

            // Push the changed string back into the array
            $parsed_url['query'] = Arr::query($query_params);

            // unparse the URL back into a string
            $new_url = (new UnparseUrlAction())->execute($parsed_url);

            return redirect($new_url);
        }

        // If we didn't have a query string, all we need to do is toggle the property.
        $new_url = ($startEditing) ?
            $url->append('?pro_editing=true') :
            $url->remove('?pro_editing=true');

        return redirect($new_url);
    }

    public function canFindView(string $key): bool
    {
        return Prodigy::canFindView($key);
    }
}
