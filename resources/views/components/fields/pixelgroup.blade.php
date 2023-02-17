@props(['key', 'data'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" x-data>
    <x-prodigy::editor.label
            :label="$data['label'] ?? $key"
            for="block.content.{{$key}}"
            :help="$data['help'] ?? ''">
    </x-prodigy::editor.label>

    <div class="pro-flex pro-gap-2">
        <div class="pro-bg-gray-200 pro-flex pro-gap-1 pro-rounded-sm">
            <button class="pro-p-2 pro-bg-white pro-rounded-sm pro-m-px" wire:click="$set('block.content.{{ $key }}.united_values', true)">
                <x-prodigy::icons.square-rounded class="pro-w-5 pro-h-5"></x-prodigy::icons.square-rounded>
            </button>
            <button class="pro-p-2">
                <x-prodigy::icons.square-exploded class="pro-w-5 pro-h-5"></x-prodigy::icons.square-exploded>
            </button>
        </div>
        <div class="pro-bg-gray-200 pro-flex pro-gap-1 pro-flex-grow">
            <input wire:model="block.content.{{$key}}.all"
                    class="text-sm pro-w-full pro-rounded-sm pro-border-gray-300 bg-gray-50 pro-shadow-sm pro-px-1 pro-text-center pro-py-2.5" >
        </div>
    </div>
</x-prodigy::editor.field-wrapper>