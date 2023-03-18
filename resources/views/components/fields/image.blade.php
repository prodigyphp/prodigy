@props(['key', 'data', 'block'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}"/>

    @if($block)
        <div>
            <livewire:prodigy-photo-uploader :block="$block" wire:key="{{$key}}" :array_key="$key"/>
        </div>
    @endif
</x-prodigy::editor.field-wrapper>