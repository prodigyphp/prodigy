@props(['key', 'data'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" x-data :key="$key">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}" />

    <div class="pro-flex">
        <div class="pro-rounded-tl-sm pro-flex pro-items-center pro-rounded-bl-sm pro-shadow-sm pro-bg-gray-50 pro-border pro-border-gray-300 pro-border-r-0 pro-px-2">
            <input type="color"
               wire:model="block.content.{{$key}}"
               value="{{ $block->content[$key] ?? null }}"
               class=""/>
        </div>

        <x-prodigy::editor.input
                type="text"
                value="{{ $block->content[$key] ?? null }}"
                wire:model="block.content.{{$key}}" />
        <button wire:click="$set('block.content.{{$key}}', '')">X</button>
    </div>
</x-prodigy::editor.field-wrapper>