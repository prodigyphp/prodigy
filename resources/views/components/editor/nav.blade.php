@props(['label', 'currentState', 'page'])

<div class="pro-flex pro-px-4 pro-py-4 pro-z-[900] pro-relative">
    <div
            x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }

                this.$refs.button.focus()

                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return

                this.open = false

                focusAfter && focusAfter.focus()
            }
        }"
            x-on:keydown.escape.prevent.stop="close($refs.button)"
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
            x-id="['dropdown-button']"
            class="pro-flex-grow"
    >
        <!-- Button -->
        <button
                x-ref="button"
                x-on:click="toggle()"
                :aria-expanded="open"
                :aria-controls="$id('dropdown-button')"
                type="button"
                class="pro-flex pro-font-semibold pro-text-[16px] pro-items-center pro-gap-2 pro-bg-white pro-px-5 pro-py-2.5 pro-rounded-md pro-shadow"
        >
            {{ $label }}

            <svg xmlns="http://www.w3.org/2000/svg" class="pro-h-5 pro-w-5 pro-text-gray-400" viewBox="0 0 20 20"
                 fill="currentColor">
                <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"/>
            </svg>
        </button>

        <!-- Panel -->
        <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-button')"
                style="display: none;"
                class="pro-absolute pro-overflow-hidden pro-left-4 pro-mt-2  pro-w-[325px] pro-rounded-md pro-bg-white pro-shadow-md"
        >

            @if($page)
                <x-prodigy::editor.nav-button
                        :active="$currentState == 'blocksList'"
                        x-on:click="Livewire.emit('updateState', 'blocksList')">
                    {{ _('Edit Current Page') }}
                </x-prodigy::editor.nav-button>
                <x-prodigy::editor.nav-button x-on:click="Livewire.emit('editPageSettings', {{ $page->id }})">
                    {{ _('Current Page Settings') }}
                </x-prodigy::editor.nav-button>
                <x-prodigy::editor.nav-button x-on:click="Livewire.emit('duplicatePageFromDraft', {{ $page->id }})">
                    {{ _('Duplicate') }}
                </x-prodigy::editor.nav-button>

                <x-prodigy::editor.nav-separator/>
            @endif


            <x-prodigy::editor.nav-button
                    :active="$currentState == 'pagesList'"
                    x-on:click="Livewire.emit('updateState','pagesList')">
                {{ _('All Pages') }}
            </x-prodigy::editor.nav-button>

            @php
                $entry_schemas = \ProdigyPHP\Prodigy\Prodigy::getEntrySchemas();
            @endphp

            @if($entry_schemas->isNotEmpty())
                <x-prodigy::editor.nav-separator/>

                <x-prodigy::editor.nav-title>Entries</x-prodigy::editor.nav-title>

                @forelse($entry_schemas as $schema)
                    <x-prodigy::editor.nav-button
                            wire:key="{{$schema['type']}}"
                            x-on:click="Livewire.emit('viewEntriesByType', '{{ $schema['type'] }}')">
                        {{ $schema['labels']['plural'] ?? str($schema['type'])->title() ?? 'Error reading schema' }}
                    </x-prodigy::editor.nav-button>
                @empty
                @endforelse
            @endif

            <x-prodigy::editor.nav-separator/>
            <form method="post" action="/prodigy/logout">
                @csrf
                <x-prodigy::editor.nav-button type="submit" class="pro-text-gray-500">
                    {{ _('Log out') }}
                </x-prodigy::editor.nav-button>
            </form>
        </div>


    </div>
    {{ $slot }}
</div>