@props(['key', 'data'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}"/>

    <div class="">
        @if($data['block_id'])
            <livewire:prodigy-photo-uploader :block_id="$data['block_id']"
                                             :array_key="$key"></livewire:prodigy-photo-uploader>
        @endif
    </div>
</x-prodigy::editor.field-wrapper>