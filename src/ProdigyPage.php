<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\View\ComponentAttributeBag;
use Livewire\Component;
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

    protected $listeners = ['editBlock' => '$refresh', 'stopEditingPage'];

    public function mount(string $wildcard = null)
    {

        $this->page = $this->getPage($wildcard);

        // Show edit screen if user can edit, and has requested edit access.
        $this->editing = $this->canEdit() && request('editing');

        // dynamic routing means we need to not just load for anything.
        if (!$this->page) {
            abort(404);
        }

    }

    public function getPage(string $wildcard = null) : Page|null
    {
        if ($wildcard) {
            return Page::where('slug', $wildcard)->first();
        } else {
            return Page::where('slug', request()->path())->first();
        }
    }

    /**
     * @return bool
     * Right now just checks to see if the user is logged in.
     * @todo Need to register this logic in a service provider.
     */
    public static function canEdit(): bool
    {
        return (Auth::check());
    }

    public function addBlock($block_key) {
        dd($block_key);
    }

    /**
     * Add the "editing" flag so it edits the page.
     */
    public function editPage(bool $startEditing = true)
    {
        $url = Str::of(request()->header('Referer'));


        if ($startEditing) {
            $url = $url->append('?editing=true');
        } else {
            $url = $url->remove('?editing=true');
        }

        return redirect($url);
    }

    public function stopEditingPage()
    {
        return $this->editPage(false);
    }

    public function render()
    {
        $this->blocks = $this->page->blocks()->orderBy('order', 'asc')->get();

        return view('prodigy::prodigy-page');
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
