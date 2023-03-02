<div class="pro-bg-gray-100 pro-flex-grow pro-flex pro-flex-col pro-max-h-screen pro-min-h-screen">
    <div class="pro-flex-grow pro-overflow-scroll">
        <div class="p-4 pro-flex pro-flex-wrap">
            <x-prodigy::editor.h2 class="pro-px-2">{{ $block->title }}</x-prodigy::editor.h2>
            @if($errors->isNotEmpty())
                @foreach($errors->all() as $error)
                    <p class="pro-text-red-500 pro-text-sm mb-2">{{ $error }}</p>
                @endforeach
            @endif

            @if($schema)
                @foreach($schema['fields'] as $key => $meta)
                    {{ $this->getField($key, $meta) }}
                @endforeach
            @else
                No editable fields found.
            @endif

        </div>
    </div>
    <div class="pro-flex pro-gap-2 pro-p-2 pro-w-full">
        <x-prodigy::editor.button class="pro-flex-grow" wire:click="save">
            Save
        </x-prodigy::editor.button>
        <x-prodigy::editor.button class="pro-flex-grow" wire:click="close">
            Cancel
        </x-prodigy::editor.button>
    </div>
</div>
