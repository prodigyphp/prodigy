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

    public $cssPath = __DIR__ . '/../public/prodigy.css';
    public $jsPath = __DIR__ . '/../public/prodigy.js';

    protected $listeners = ['editBlock' => '$refresh', 'fireGlobalRefresh' => '$refresh', 'openProdigyPanel', 'closeProdigyPanel'];

    public function mount(string $wildcard = null)
    {

        // Show edit screen if user can edit, and has requested edit access.
        $this->editing = Gate::check('viewProdigy', auth()->user()) && request('editing');

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
     *
     * @TODO double check that this is still true.
     */
    public function getSlug(string $wildcard)
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
        if(!auth()->check()) {
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
         * Either move the existing block or create a new block.
         *      Existing blocks pass their ID as an integer
         *      New blocks pass their key ('blocks.header.header') as a string.
         */
        if (is_numeric($block_key)) {
            $block = $blockAdder->insertExistingBlockByLinkId($block_key)->execute();
            // don't open the block if we're just dragging it.

        } else {
            $block = $blockAdder->createBlockByKey($block_key)->execute();

            // Opens the editor once it's been created.
            $this->emit('editBlock', $block->id);
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

        return view('prodigy::prodigy-page');
    }

    /**
     * Toggle the "editing" flag so it edits the page.
     */
    protected function toggleProdigyPanel(bool $startEditing = true)
    {
        $url = Str::of(request()->header('Referer'));

        if ($startEditing) {
            $url = $url->append('?editing=true');
        } else {
            $url = $url->remove('?editing=true');
        }

        return redirect($url);
    }

    public function canFindView(string $key): bool
    {
        return Prodigy::canFindView($key);
    }

}
