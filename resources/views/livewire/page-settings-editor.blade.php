<div class="pro-bg-gray-100 pro-flex-grow pro-flex pro-flex-col pro-h-full pro-overflow-y-scroll">
    <x-prodigy::editor.nav :label="$title" :page="$block" currentState="pageEditor">
        <button class="pro-text-red-500 hover:pro-text-red-700 pro-text-[14px] pro-font-semibold"
                x-on:click="deletePage({{ $block->id }})">
            {{ _('Delete') }}
        </button>
    </x-prodigy::editor.nav>
    <div class="pro-flex-grow pro-overflow-scroll pro-px-4">
        @if($errors->isNotEmpty())
            @foreach($errors->all() as $error)
                <p class="pro-text-red-500 pro-text-sm mb-2">{{ $error }}</p>
            @endforeach
        @endif

        <x-prodigy::editor.field-wrapper>
            <x-prodigy::editor.label label="Page Title" for="title"></x-prodigy::editor.label>
            <x-prodigy::editor.input wire:model="block.title" id="title"></x-prodigy::editor.input>
        </x-prodigy::editor.field-wrapper>

        <x-prodigy::editor.field-wrapper>
            <x-prodigy::editor.label label="Page Slug" for="slug"></x-prodigy::editor.label>
            <x-prodigy::editor.input wire:model="block.slug" id="slug"></x-prodigy::editor.input>
        </x-prodigy::editor.field-wrapper>

        @if($schema)
            @foreach($schema['fields'] as $key => $meta)
                {{ $this->getField($key, $meta) }}
            @endforeach
        @else
            No editable fields found.
        @endif


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