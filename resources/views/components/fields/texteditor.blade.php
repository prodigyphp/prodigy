@props(['key', 'data'])

@php
    $random_number = rand(1, 999999);
@endphp

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" :key="$key">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}"/>

    <div wire:ignore>
        <textarea wire:model="block.content.{{$key}}" id="editor-{{ $random_number }}"></textarea>
    </div>

    <style>
        .ck-editor__editable_inline {
            min-height: 96px;
        }

        .ck-content > blockquote,
        .ck-content > dl,
        .ck-content > dd,
        .ck-content > h1,
        .ck-content > h2,
        .ck-content > h3,
        .ck-content > h4,
        .ck-content > h5,
        .ck-content > h6,
        .ck-content > hr,
        .ck-content > figure,
        .ck-content > p,
        .ck-content > pre {
            margin: revert;
        }

        .ck-content > ol,
        .ck-content > ul {
            list-style: revert;
            margin: revert;
            padding: revert;
        }

        .ck-content > table {
            border-collapse: revert;
        }

        .ck-content > h1,
        .ck-content > h2,
        .ck-content > h3,
        .ck-content > h4,
        .ck-content > h5,
        .ck-content > h6 {
            font-size: revert;
            font-weight: revert;
        }
    </style>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor-{{$random_number}}'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.
                    set("block.content.{{$key}}", editor.getData());
                })
            })
            .catch(error => {
                console.log(error);
            });
    </script>
</x-prodigy::editor.field-wrapper>