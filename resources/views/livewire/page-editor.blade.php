<div class="pro-bg-gray-100 pro-flex-grow pro-flex pro-flex-col pro-h-full">
    <div class="pro-flex-grow pro-overflow-scroll pro-px-4">
        <x-prodigy::editor.h2>Create Page</x-prodigy::editor.h2>

        <x-prodigy::editor.field-wrapper>
            <x-prodigy::editor.label label="Page Title" for="title"></x-prodigy::editor.label>
            <x-prodigy::editor.input wire:model="page.title" id="title"></x-prodigy::editor.input>
        </x-prodigy::editor.field-wrapper>

        <x-prodigy::editor.field-wrapper>
            <x-prodigy::editor.label label="Page Slug" for="slug"></x-prodigy::editor.label>
            <x-prodigy::editor.input wire:model="page.slug" id="slug"></x-prodigy::editor.input>
        </x-prodigy::editor.field-wrapper>

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