@props(['block_order', 'column_index' => null, 'column_order' => null, 'style' => 'regular'])

@php
    $classes = match($style) {
        'regular' => 'prodigy-dropzone-regular',
        'minimal' => 'prodigy-dropzone-minimal'
    }
@endphp

<div
        x-data="{dragging: false, block_order: @js($block_order), column_index: @js($column_index ?? null), column_order: @json($column_order ?? null)}"
        x-on:dragover.prevent="$el.classList.add('pro-bg-blue-500');"
        x-on:dragleave.prevent="$el.classList.remove('pro-bg-blue-500');"
        x-on:drop.prevent="
                                      block_key = event.dataTransfer.getData('text/plain');
                                      $wire.addBlock(block_key, block_order, column_index, column_order);
                                      $el.classList.remove('pro-bg-blue-500');"
        class="prodigy-dropzone pro-z-[1000] pro-relative pro-mb-2 {{ $classes }}">
    {{ $slot }}
</div>