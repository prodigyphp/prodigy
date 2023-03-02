@props(['key', 'data'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}" />

    <x-prodigy::editor.input  type="text"
           wire:model="block.content.{{$key}}"
           value="{{ $block->content[$key] ?? $data['default'] ?? null }}" />
</x-prodigy::editor.field-wrapper>