@props(['key', 'data', 'block'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" x-data>
    <x-prodigy::editor.label
            :label="$data['label'] ?? $key"
            for="block.content.{{$key}}"
            :help="$data['help'] ?? ''">
    </x-prodigy::editor.label>

    <div class="pro-flex pro-flex-col" x-data="">
        @forelse($block->repeaterChildren as $child_block)
            <div class="pro-block pro-bg-white pro-shadow-md pro-pl-2 pro-pr-4 pro-rounded-md pro-py-2 pro-mb-2 pro-flex-grow pro-text-left pro-font-medium pro-flex pro-gap-2 pro-items-center">
                <div class="hover:pro-cursor-grab">
                    <x-prodigy::icons.move class="w-4 pro-text-gray-500"/>
                </div>
                <div class="pro-flex-grow">
                    Item {{ $loop->index + 1 }}
                </div>
                <div>
                    <button
                            x-on:click="Livewire.emit('editBlock', {{ $child_block->id }})"
                            class="pro-text-blue-500 hover:pro-text-blue-700 hover:pro-underline pro-mr-2">
                        Edit
                    </button>
                    <button class="pro-text-gray-500 hover:pro-text-red-500 pro-relative pro-top-[0.2rem]"
                            x-on:click="deleteBlock({{ $child_block->id }})">
                        <x-prodigy::icons.close class="w-4"/>
                    </button>
                </div>
            </div>
        @empty
        @endforelse
        <x-prodigy::editor.button x-on:click="Livewire.emit('addChildBlockThenEdit', '{{ $data['key'] }}', {{ $block->id }});">+ Add New</x-prodigy::editor.button>
    </div>
</x-prodigy::editor.field-wrapper>