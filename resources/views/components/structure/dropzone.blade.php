@props(['block_order', 'column_index' => null, 'column_order' => null])

<div
        x-data="{dragging: false, block_order: @js($block_order), column_index: @js($column_index ?? null), column_order: @json($column_order ?? null)}"
        x-on:dragover.prevent="$el.classList.add('pro-bg-blue-400'); $el.classList.remove('pro-bg-gray-100')"
        x-on:dragleave.prevent="$el.classList.remove('pro-bg-blue-400'); $el.classList.add('pro-bg-gray-100')"
        x-on:drop.prevent="
                                      block_key = event.dataTransfer.getData('text/plain');
                                      $wire.addBlock(block_key, block_order, column_index, column_order);
                                      $el.classList.remove('pro-bg-blue-400');"
        class="dropzone pro-z-[1000] pro-relative pro-rounded-md pro-mb-2 pro-p-4 pro-border-2 pro-border-black/50 pro-border-dashed pro-text-black/50 pro-bg-gray-100  pro-text-center">
    {{ $slot }}
</div>