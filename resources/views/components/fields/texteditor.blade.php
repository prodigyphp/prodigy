@props(['key', 'data'])

@php
    $random_number = rand(1, 999999);
@endphp

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" :key="$key">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}" />

    <div wire:ignore>
        <textarea wire:model="block.content.{{$key}}" id="editor-{{ $random_number }}"></textarea>
    </div>

    <style>
        .ck-editor__editable_inline {
            min-height: 96px;
        }
    </style>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor-{{$random_number}}'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set("block.content.{{$key}}", editor.getData());
                })
            })
            .catch(error => {
                console.log(error);
            });
    </script>
</x-prodigy::editor.field-wrapper>