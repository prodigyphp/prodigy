@props(['key', 'data'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100">
    <x-prodigy::editor.label
            :label="$data['label'] ?? $key"
            for="block.content.{{$key}}"
            :help="$data['help'] ?? ''">
    </x-prodigy::editor.label>

    <div wire:ignore>
        <textarea wire:model="block.content.{{$key}}" id="editor"></textarea>
    </div>

    <style>
        .ck-editor__editable_inline {
            min-height: 96px;
        }
    </style>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
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