<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Livewire\Component;
use ProdigyPHP\Prodigy\Actions\AddBlockAction;
use ProdigyPHP\Prodigy\Actions\GetDraftAction;
use ProdigyPHP\Prodigy\Models\Page;

class ProdigyPage extends Component {

    use AuthorizesRequests;

    public ?Page $page;

    public ?bool $editing = false;

    public Collection $blocks;

    public array $temp;

    public $cssPath = __DIR__ . '/../public/css/prodigy.css';
    public $jsPath = __DIR__ . '/../public/js/prodigy.js';

    protected $listeners = ['editBlock' => '$refresh', 'fireGlobalRefresh' => '$refresh', 'openProdigyPanel', 'closeProdigyPanel'];

    public function mount(string $wildcard = null)
    {

        // Show edit screen if user can edit, and has requested edit access.
        $this->editing = Gate::check('viewProdigy', auth()->user()) && request('pro_editing');

        $this->page = $this->getPage($wildcard);

        // dynamic routing means we need to not just load for anything.
        if (!$this->page) {
            abort(404);
        }

    }

    /**
     * There are two kinds of routing, wildcard and page-based. This tries to pull
     * in the wildcard route, which would be set in the URL. Otherwise, it just
     * ties it to the particular page, if someone dropped <x-prodigy-page> on
     * the page.
     */
    public function getSlug(?string $wildcard) : string
    {
        return ($wildcard) ? $wildcard : request()->path();
    }

    /**
     * Either get the public page OR the draft if we're editing.
     */
    public function getPage(string $wildcard = null): Page|null
    {
        $slug = $this->getSlug($wildcard);

        // visitors get the published page.
        if (!auth()->check()) {
            return Page::where('slug', $slug)->public()->published()->first();
        }

        // Users CAN see unpublished pages, too.
        $page = Page::where('slug', $slug)->public()->first();

        // Find or create the draft to edit as an admin.
        if ($this->editing) {
            $page = (new GetDraftAction())->execute($page);
        }

        // return the regular page for regular visitors
        return $page;
    }


    public function addBlock($block_key, $block_order, $column_index = null, $column_order = null)
    {
        Gate::authorize('viewProdigy', auth()->user());
        $blockAdder = (new AddBlockAction())->forPage($this->page)
            ->atPagePosition($block_order)
            ->intoColumn($column_index)
            ->atColumnPosition($column_order);

        /**
         * Three options for adding blocks:
         * 1. $block_key is a number, so we're reordering
         * 2. $block_key starts with _GLOBAL_ so it's a global block that needs to be attached.
         * 3. $block_key is a keyed path to a block, so it needs to be created.
         */
        if (is_numeric($block_key)) {
            $block = $blockAdder->insertExistingBlockByLinkId($block_key)->execute();
        } elseif (str($block_key)->startsWith('_GLOBAL')) {
            $id = str($block_key)->remove('_GLOBAL_')->toInteger();
            $block = $blockAdder->attachGlobalBlock($id)->execute();
        } else {
            $block = $blockAdder->createBlockByKey($block_key)->execute();
            $this->emit('editBlock', $block->id); // Open the editor once it's been created.
        }

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

        $layout = config('prodigy.full_page_layout', 'layouts.app');

        return view('prodigy::prodigy-page')->layout($layout);
    }

    /**
     * Toggle the "editing" flag so it edits the page.
     * @TODO needs to be more thoughtful
     */
    protected function toggleProdigyPanel(bool $startEditing = true)
    {
        $url = Str::of(request()->header('Referer'));

        if ($startEditing) {
            $url = $url->append('?pro_editing=true');
        } else {
            $url = $url->remove('?pro_editing=true');
        }

        return redirect($url);
    }

    public function canFindView(string $key): bool
    {
        return Prodigy::canFindView($key);
    }

}
