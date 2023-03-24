@props(['key', 'data'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" :key="$key">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}" />

    @if(isset($data['multiline']) && $data['multiline'] == true)
        <x-prodigy::editor.textarea lines="3" wire:model.lazy="block.content.{{$key}}"
           value="{{ $block->content[$key] ?? $data['default'] ?? null }}">

        </x-prodigy::editor.textarea>
    @else
        <x-prodigy::editor.input  type="text"
           wire:model.lazy="block.content.{{$key}}"
           value="{{ $block->content[$key] ?? $data['default'] ?? null }}" />
    @endif

</x-prodigy::editor.field-wrapper>