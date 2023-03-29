<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Livewire\Component;
use ProdigyPHP\Prodigy\Actions\UnparseUrlAction;
use ProdigyPHP\Prodigy\Models\Entry;

class ProdigyEntry extends Component {

    public bool $editing = false;
    public int $entry_id;
    public Entry $entry;

    public $cssPath = __DIR__ . '/../../public/css/prodigy.css';
    public $jsPath = __DIR__ . '/../../public/js/prodigy.js';

    public function mount(int $entry_id)
    {
        // Show edit screen if user can edit, and has requested edit access.
        $this->editing = Gate::check('viewProdigy', auth()->user()) && request('pro_editing') == 'true';

        // get model
        $this->entry_id = $entry_id;
        $this->entry = Entry::find($entry_id);
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

    public function render()
    {
        return view('prodigy::livewire.prodigy-entry');
    }

}
