<div class="bg-gray-100 flex-grow flex flex-col h-full">
    <div class="flex-grow overflow-scroll">
        <div class="p-4">

            <div class="text-lg mb-4">{{ $block->title }}</div>
            @if($errors->isNotEmpty())
                @foreach($errors->all() as $error)
                    <p class="text-red-500 text-sm mb-2">{{ $error }}</p>
                @endforeach
            @endif

            @if($schema)
                @foreach($schema['fields'] as $attribute => $element)

                    <div class="mb-4">
                        <label class="text-sm text-gray-500 block">
                            {{ str($attribute)->title() }}
                        </label>
                        <input type="text" wire:model="block.content.{{$attribute}}"
                               value="{{ $block->content[$attribute] ?? null }}"
                               class="w-full rounded-sm border-gray-200 shadow-sm">
                    </div>
                @endforeach
            @else
                No editable fields found.
            @endif
        </div>
    </div>
    <div class="flex gap-2 p-2 w-full">
        <button wire:click="save" class="bg-white flex-grow px-2 py-2 rounded-md hover:ring-2 hover:ring-blue-300">
            Save
        </button>
        <button wire:click="close" class="bg-white flex-grow px-2 py-2 rounded-md hover:ring-2 hover:ring-blue-300">
            Cancel
        </button>
    </div>
</div>
