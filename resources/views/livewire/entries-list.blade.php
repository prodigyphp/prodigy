@php
    $field_label = $entry_schema['labels']['field_label'] ?? '' ;
@endphp

<div class="pro-flex pro-flex-col pro-max-h-screen">
    <x-prodigy::editor.nav label="{{ $entry_schema['labels']['plural'] ?? str($entry_schema['type'])->title() }}"
                           :page="$page" currentState="entriesList">
        <button wire:click="$emit('createEntryByType', '{{$entry_schema['type']}}')">
            <x-prodigy::icons.plus class="pro-w-6"></x-prodigy::icons.plus>
        </button>
    </x-prodigy::editor.nav>

    <div class=" pro-px-4 pro-overflow-scroll">

        @forelse($entries as $entry_item)

            <x-prodigy::editor.block-row
                    :block="$entry_item"
                    draggable="true"
                    x-on:dragstart="event.dataTransfer.setData('text/plain', {{ $entry_item->id }});"
                    x-on:drop.prevent="$wire.reorder(event.dataTransfer.getData('text/plain'), {{ $loop->index }}); $el.classList.remove('pro-bg-blue-500'); $el.classList.add('pro-bg-white');"
                    x-on:dragover.prevent="$el.classList.add('pro-bg-blue-500');$el.classList.remove('pro-bg-white');"
                    x-on:dragleave.prevent="$el.classList.remove('pro-bg-blue-500');$el.classList.add('pro-bg-white');">
                <x-slot:label>
                    {{ $entry_item['content'][$field_label] ?? '' }}
                </x-slot:label>
                <x-slot:actions>
                    <button
                            x-on:click.prevent="Livewire.emit('editEntry', {{ $entry_item->id }})"
                            class="pro-text-blue-500 hover:pro-text-blue-700 hover:pro-underline pro-mr-2">
                        Edit
                    </button>
                    <button class="pro-text-gray-500 hover:pro-text-red-500 pro-relative pro-top-[0.2rem]"
                            x-on:click="deleteEntry({{ $entry_item->id }})">
                        <x-prodigy::icons.close class="pro-w-4"/>
                    </button>
                </x-slot:actions>
            </x-prodigy::editor.block-row>
        @empty
            <div class="pro-px-4">
                <p class="pro-mb-4">No {{ $entry_schema['labels']['plural'] ?? str($entry_schema['type'])->title() }}
                    found.</p>
                <x-prodigy::editor.button class="pro-flex-grow"
                                          wire:click="$emit('createEntryByType', '{{$entry_schema['type']}}')">
                    Create One
                </x-prodigy::editor.button>
            </div>

        @endforelse
        <div class="pro-pb-8"></div>
    </div>
</div>