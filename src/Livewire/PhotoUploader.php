<?php

namespace ProdigyPHP\Prodigy\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
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
    }

    public function save()
    {
        $this->validate();

        $this->block
            ->addMedia($this->photo->getRealPath())
            ->usingName($this->photo->getClientOriginalName())
            ->toMediaCollection('prodigy_photos');

    }

    public function render()
    {
        return view('prodigy::partials.photo-uploader');
    }

}
