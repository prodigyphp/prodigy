@props(['key', 'meta'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100">
    <x-prodigy::editor.label
            :label="$data['label'] ?? $key"
            for="block.content.{{$key}}"
            :help="$data['help'] ?? ''">
    </x-prodigy::editor.label>
    <input type="text"
           wire:model="block.content.{{$key}}"
           value="{{ $block->content[$key] ?? null }}"
           class="text-sm pro-w-full pro-rounded-sm pro-border-gray-300 bg-gray-50 pro-shadow-sm pro-py-2.5">
</x-prodigy::editor.field-wrapper>