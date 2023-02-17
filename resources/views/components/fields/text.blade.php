@props(['key', 'data'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100">
    <x-prodigy::editor.label
            :label="$data['label'] ?? $key"
            for="block.content.{{$key}}"
            :help="$data['help'] ?? ''">
    </x-prodigy::editor.label>

    <x-prodigy::editor.input  type="text"
           wire:model="block.content.{{$key}}"
           value="{{ $block->content[$key] ?? $data['default'] ?? null }}" />
</x-prodigy::editor.field-wrapper>