@props(['page'])

<div class="">
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
            },
            confirmDiscardChanges(draft_id) {
              const response = confirm('Permanently discard changes?');

              if (response) {
                   return Livewire.emit('deleteDraft', draft_id);
              }
        },
        }"
            x-on:keydown.escape.prevent.stop="close($refs.button)"
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
            x-id="['dropdown-button']"
            class="pro-flex-grow"
    >
        <button
                x-ref="button"
                x-on:click="toggle()"
                :aria-expanded="open"
                :aria-controls="$id('dropdown-button')"
                type="button"
                class="pro-flex pro-font-semibold pro-text-[16px] pro-items-center pro-gap-2 pro-bg-white pro-px-5 pro-py-2.5 pro-rounded-md pro-shadow"
        >
            Done
        </button>

        <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-button')"
                style="display: none;"
                class="pro-z-[1000] pro-absolute pro-overflow-hidden pro-inset-0 pro-bg-white pro-shadow-xl pro-flex pro-gap-2 pro-p-4"
        >

            <x-prodigy::editor.button
                    class="pro-flex-grow pro-font-semibold"
                    x-on:click="Livewire.emit('closeProdigyPanel')">
                Close Editor
            </x-prodigy::editor.button>
            <x-prodigy::editor.button
                    class="pro-flex-grow pro-font-semibold"
                    x-on:click="confirmDiscardChanges({{$page->id}});">
                Discard Changes
            </x-prodigy::editor.button>

            <x-prodigy::editor.button wire:click="$emit('publishDraft', {{ $page->id }})"
                                      class="pro-flex-grow pro-font-semibold pro-bg-gradient-to-bl pro-from-blue-400 pro-to-blue-600 pro-border pro-border-blue-700 hover:pro-from-blue-600 hover:pro-to-blue-700 pro-text-white">
                Publish
            </x-prodigy::editor.button>
        </div>
        <div
                style="display:none;"
                x-show="open"
                x-transition.opacity
                class="pro-fixed pro-inset-0 pro-bg-gray-700/25 pro-z-[999]"></div>

    </div>

</div>