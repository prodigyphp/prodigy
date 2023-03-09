@props(['key', 'data', 'block'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}"/>

    <div class="">
        @if($block)
            <livewire:prodigy-photo-uploader :block="$block" :array_key="$key" />
        @endif
    </div>
</x-prodigy::editor.field-wrapper>