<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use ProdigyPHP\Prodigy\BlockGroups\BlockGroup;
use ProdigyPHP\Prodigy\Models\Block;
use Symfony\Component\Yaml\Yaml;

class PhotoUploader extends Component {

    use WithFileUploads;

    public $photo;
    public Block $block;
    public string $key;

    public string $preview;

    protected $listeners = ['refresh'=> '$refresh'];

    public function mount(int $block_id, string $array_key)
    {
        $this->block = Block::find($block_id);
        $this->key = $array_key;
    }

    protected $rules = [
        'photo' => 'image|max:4096'
    ];

    public function updatedPhoto()
    {
        $this->save();
        $this->emit('fireGlobalRefresh');
        $this->emitSelf('refresh');
    }

    public function save()
    {
        Gate::authorize('viewProdigy', auth()->user());
        $this->validate();

        $this->block
            ->addMedia($this->photo->getRealPath())
            ->usingName($this->photo->getClientOriginalName())
            ->toMediaCollection('prodigy_photos');

    }

    public function delete()
    {
          Gate::authorize('viewProdigy', auth()->user());

          $this->block->getFirstMedia('prodigy_photos')->delete();
          $this->emit('fireGlobalRefresh');
          $this->emitSelf('refresh');
    }

    public function render()
    {
        $this->preview = $this->block->getFirstMediaUrl('prodigy_photos', 'thumb');
        return view('prodigy::partials.photo-uploader');
    }

}
