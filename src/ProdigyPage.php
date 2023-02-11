<?php

namespace ProdigyPHP\Prodigy;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\ComponentAttributeBag;
use Livewire\Component;
use ProdigyPHP\Prodigy\Models\Page;
use Symfony\Component\Console\Input\Input;

class ProdigyPage extends Component {

    public ?Page $page;

    public ?bool $editing = false;

    public Collection $blocks;

    public array $temp;

    protected $listeners = ['editingBlock' => '$refresh', 'stopEditingPage'];

    public function mount(string $wildcard)
    {
        $this->page = Page::where('slug', $wildcard)->first();

        // Show edit screen if user can edit, and has requested edit access.
        $this->editing = $this->canEdit() && request('editing');

        // dynamic routing means we need to not just load for anything.
        if (!$this->page) {
            abort(404);
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

    /**
     * Add the "editing" flag so it edits the page.
     */
    public function editPage(bool $startEditing = true)
    {
        $url = Str::of(request()->header('Referer'));


        if($startEditing) {
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

}
