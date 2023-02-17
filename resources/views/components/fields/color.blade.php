@props(['key', 'data'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" x-data>
    <x-prodigy::editor.label
            :label="$data['label'] ?? $key"
            for="block.content.{{$key}}"
            :help="$data['help'] ?? ''">
    </x-prodigy::editor.label>
    <div class="pro-flex">
        <div class="pro-rounded-tl-sm pro-flex pro-items-center pro-rounded-bl-sm pro-bg-gray-50 pro-border pro-border-gray-300 pro-border-r-0 pro-px-2">
            <input type="color"
               x-ref="color"
               wire:model="block.content.{{$key}}"
               value="{{ $block->content[$key] ?? null }}"
               class=""/>
        </div>

        <input
                type="text"
                value="{{ $block->content[$key] ?? null }}"
                wire:model="block.content.{{$key}}"
                class="text-sm pro-w-full pro-rounded-tr-sm pro-rounded-br-sm pro-border-gray-300 bg-gray-50 pro-shadow-sm">
        <button wire:click="$set('block.content.{{$key}}', '')">X</button>
    </div>
</x-prodigy::editor.field-wrapper>