<div
        @keydown.meta.enter="$wire.save;"
        class="not-prose lg:not-prose pro-bg-gray-100 pro-flex-grow pro-flex pro-flex-col pro-max-h-screen pro-min-h-screen">
    @if($block)
        <div class="pro-flex-grow pro-overflow-scroll pro-overscroll-contain">
            <div class="pro-p-4 pro-flex pro-flex-wrap">
                <x-prodigy::editor.h2 class="pro-px-2 pro-flex">
                    <div class="pro-flex-grow"
                         x-data="{is_global: @entangle('block.is_global'), global_title: @entangle('block.global_title'), locally_editing_title: false}">


                        <div x-show="!is_global" class="pro-flex">
                            <div class="pro-flex-grow">
                                {{ $block->title }}
                            </div>
                            <button wire:click="toggleGlobalBlock(true)"
                                    class="pro-border pro-border-gray-200 hover:pro-border-blue-500 pro-text-sm pro-px-3 pro-py-1 pro-rounded-sm pro-text-gray-600 hover:pro-text-blue-700">
                                {{ _('Local') }}
                            </button>

                        </div>


                        <div class="pro-flex" x-show="is_global && !locally_editing_title">
                            <div class="pro-flex-grow">
                                {{ $block->global_title }}
                                <button x-on:click="locally_editing_title = true"
                                        class="hover:pro-text-blue-500 pro-relative pro-top-1 pro-left-1">
                                    <x-prodigy::icons.pencil-square class="pro-w-5"/>
                                </button>
                            </div>
                            <button wire:click="toggleGlobalBlock(false)"
                                    class="pro-border pro-border-orange-600 hover:pro-border-blue-500 pro-text-sm pro-px-3 pro-py-1 pro-rounded-sm pro-text-orange-600 hover:pro-text-blue-700">
                                {{ _('Global') }}
                            </button>
                        </div>

                        <div class="pro-flex pro-gap-2" x-show="is_global && locally_editing_title">
                            <x-prodigy::editor.input x-model.lazy="global_title"/>
                            <x-prodigy::editor.button x-on:click="locally_editing_title = false"
                                                      class="pro-min-w-[120px]">
                                {{ _('Set Title') }}
                            </x-prodigy::editor.button>
                        </div>
                    </div>
                </x-prodigy::editor.h2>

                @if($errors->isNotEmpty())
                    @foreach($errors->all() as $error)
                        <p class="pro-text-red-500 pro-text-sm mb-2">{{ $error }}</p>
                    @endforeach
                @endif

                @if($schema)
                    @foreach($schema['fields'] as $key => $meta)
                        {{ $this->getField($key, $meta) }}
                    @endforeach
                @else
                    No editable fields found.
                @endif

            </div>
        </div>
    @endif
    <div class="pro-flex pro-gap-2 pro-p-2 pro-w-full">
        <x-prodigy::editor.button class="pro-flex-grow" wire:click="save">
            Save
        </x-prodigy::editor.button>
        <x-prodigy::editor.button class="pro-flex-grow" wire:click="close">
            Cancel
        </x-prodigy::editor.button>
    </div>
</div>
