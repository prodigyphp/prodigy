@props(['key', 'data'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}" />

    <div wire:ignore>
        <textarea wire:model="block.content.{{$key}}" id="prodigyCodeEditor"></textarea>
    </div>


    <script>
      var editor = CodeMirror.fromTextArea(document.getElementById("prodigyCodeEditor"), {
        lineNumbers: true,
        viewportMargin: Infinity
      });

      editor.on("change", function(cm, change) {
          @this.set("block.content.{{$key}}", cm.getValue());
      })
    </script>
</x-prodigy::editor.field-wrapper>