@props(['key', 'data'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" x-data>
    <x-prodigy::editor.label
            :label="$data['label'] ?? $key"
            for="block.content.{{$key}}"
            :help="$data['help'] ?? ''">
    </x-prodigy::editor.label>
    <div class="pro-flex">
        <livewire:prodigy-photo-uploader :block_id="$data['block_id']" :array_key="$key"></livewire:prodigy-photo-uploader>
    </div>
</x-prodigy::editor.field-wrapper>