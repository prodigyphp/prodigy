<div>
    <x-prodigy::editor.nav label="{{ $entry_schema['labels']['plural'] ?? str($entry_schema['type'])->title() }}" :page="$page" currentState="entriesList">
        <button wire:click="$emit('createEntryByType', '{{$entry_schema['type']}}')">
            <x-prodigy::icons.plus class="pro-w-6"></x-prodigy::icons.plus>
        </button>
    </x-prodigy::editor.nav>

    <div class="">

        @forelse($entries as $entry_item)

            <x-prodigy::editor.button-item wire:click.prevent="$emit('editEntry', {{ $entry_item->id }})">
                <x-slot:title>
                    {{ $entry_item->title }}
                </x-slot:title>
                <x-slot:actions>
                    <div wire:click.prevent="$emit('editEntry', {{ $entry_item->id }})">
                        <x-prodigy::icons.cog class="w-5 hover:pro-text-blue-500"></x-prodigy::icons.cog>
                    </div>
                </x-slot:actions>
            </x-prodigy::editor.button-item>
        @empty
            <div class="px-4">
                <p class="pro-mb-4">No {{ $entry_schema['labels']['plural'] ?? str($entry_schema['type'])->title() }} found.</p>
                <x-prodigy::editor.button class="pro-flex-grow" wire:click="$emit('createEntryByType', '{{$entry_schema['type']}}')">
                    Create One
                </x-prodigy::editor.button>
            </div>

        @endforelse
    </div>
</div>