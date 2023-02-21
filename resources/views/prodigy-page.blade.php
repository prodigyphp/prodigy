@section('title')
    {{ $page->title }}
@endsection

<div class="{{ ($editing) ? 'lg:flex w-full h-full' : '' }}">

    @if($editing)
        @isset($cssPath)
            <style>{!! file_get_contents($cssPath) !!}</style>
            <style>
                body {
                    padding-left: 28rem;
                }
            </style>
        @endisset

        @isset($jsPath)
            <script>{!! file_get_contents($jsPath) !!}</script>
        @endisset

        <script src="/vendor/prodigy/ckeditor.js"></script>

        <livewire:prodigy-editor :page="$page"></livewire:prodigy-editor>
        <div class="pro-order-2 pro-absolute pro-inset-0 lg:pro-relative lg:pro-min-h-screen lg:pro-max-h-screen lg:pro-inset-auto pro-bg-white pro-flex-grow pro-overflow-scroll">
            @endif

            <main>

                @if(Auth::check() && !$editing)
                    <button wire:click="startEditingPage"
                            style="z-index:999;position: fixed; top:0; left:0;">
                        <x-prodigy::icons.arrow-down-right-mini></x-prodigy::icons.arrow-down-right-mini>
                    </button>
                    <script>
                        document.onkeydown = function (e) {
                            if (e.keyCode == 27) {
                                window.livewire.emit('startEditingPage')
                            }
                        };
                    </script>
                @endif

                @forelse($blocks as $block)
                    @if(!$this->canFindView("{$block->key}"))
                        @continue
                    @endif

                    @if(!$editing && $block->content?->has('show_on_page') && $block->content['show_on_page'] == 'hide')
                        @continue
                    @endif

                    <x-prodigy::structure.wrapper wire:key="{{ $block->id }}" :editing="$editing" :block="$block">
                        <x-prodigy::structure.inner :editing="$editing" :block="$block">

                            @if($block->key == 'prodigy::blocks.basic.row')
                                <x-prodigy::blocks.basic.row :block="$block" :editing="$editing">
                                </x-prodigy::blocks.basic.row>
                            @else
                                <x-dynamic-component :component="$block->key"
                                                     :attributes="new Illuminate\View\ComponentAttributeBag($block->content?->all() ?? [])">
                                </x-dynamic-component>
                            @endif

                        </x-prodigy::structure.inner>
                        @if($editing)
                            <x-prodigy::structure.dropzone :block_order="$block->pivot->order" />
                        @endif
                    </x-prodigy::structure.wrapper>

                @empty
                    @if($editing)

                        <x-prodigy::structure.dropzone block_order="0">
                            Drag and drop a block.
                        </x-prodigy::structure.dropzone>
                    @endif
                @endforelse
            </main>

            @if($editing)
                <div class="pb-20"></div>
        </div>
    @endif
</div>
