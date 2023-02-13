<div class="pro-bg-gray-100 pro-flex-grow pro-flex pro-flex-col pro-h-full">
    <div class="pro-flex-grow pro-overflow-scroll">
        <div class="p-4">

            <div class="pro-text-lg pro-mb-4">{{ $block->title }}</div>
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
        <button wire:click="save"
                class="pro-bg-white pro-flex-grow pro-px-2 pro-py-2 pro-rounded-md hover:pro-ring-2 hover:pro-ring-blue-300">
            Save
        </button>
        <button wire:click="close"
                class="pro-bg-white pro-flex-grow pro-px-2 pro-py-2 pro-rounded-md hover:pro-ring-2 hover:pro-ring-blue-300">
            Cancel
        </button>
    </div>
</div>
