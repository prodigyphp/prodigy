<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\View\ComponentAttributeBag;
use Livewire\Component;
use ProdigyPHP\Prodigy\Actions\AddBlockAction;
use ProdigyPHP\Prodigy\Models\Page;
use Symfony\Component\Console\Input\Input;

class ProdigyPage extends Component {

    use AuthorizesRequests;

    public ?Page $page;

    public ?bool $editing = false;

    public Collection $blocks;

    public array $temp;

    public $cssPath = __DIR__ . '/../public/prodigy.css';
    public $jsPath = __DIR__ . '/../public/prodigy.js';

    protected $listeners = ['editLink' => '$refresh', 'fireGlobalRefresh' => '$refresh', 'openProdigyPanel', 'closeProdigyPanel'];

    public function mount(string $wildcard = null)
    {

        $this->page = $this->getPage($wildcard);

        // Show edit screen if user can edit, and has requested edit access.
        $this->editing = Gate::check('viewProdigy', auth()->user()) && request('editing');

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
    public function getPage(string $wildcard = null) : Page|null
    {
        if ($wildcard) {
            return Page::where('slug', $wildcard)->first();
        } else {
            return Page::where('slug', request()->path())->first();
        }
    }


    public function addBlock($block_key, $block_order, $column_index = null, $column_order = null) {
        Gate::authorize('viewProdigy', auth()->user());

        $block = (new AddBlockAction($block_key))
            ->forPage($this->page)
            ->atPagePosition($block_order)
            ->intoColumn($column_index)
            ->atColumnPosition($column_order)
            ->execute();

        dd('todo, add block pivot');

        // Opens the editor once it's been created.
        $this->emit('editLink', $block->pivot->id);
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

    /**
     * This is a quirk of Laravel's component system. Local components remove the 'components.'
     * part of the component name. So something in /components/blocks/header.blade.php would
     * be used as <x-blocks.header>. But packages handle this a little differently. They need
     * to test prodigy::components.blocks.basic.row for <x-prodigy::blocks.basic.row>
     * So we manually add the `::components` bit.
     */
    public function canFindView(string $key): bool
    {
        $mutated_key = Str::of($key);

        // It's a package component
        if($mutated_key->contains('::')) {
            $mutated_key = $mutated_key->replace('::', '::components.')->toString();
            return View::exists($mutated_key);
        }

        // It's a local component, just return the key.
        return View::exists("components.{$key}");

    }

}
