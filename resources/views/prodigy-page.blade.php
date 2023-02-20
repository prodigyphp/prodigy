
@section('title')
{{ $page->title }}
@endsection

<div class="{{ ($editing) ? 'lg:flex w-full h-full' : '' }}">

    @if($editing)
        @isset($cssPath)
            <style>{!! file_get_contents($cssPath) !!}</style>
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

                @foreach($blocks as $block)
                    @if($this->canFindView("{$block->key}"))
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
                        </x-prodigy::structure.wrapper>

                        @if($editing)
                            <div
                                    x-data="{dragging: false}"
                                    x-on:dragover.prevent="$el.classList.add('pro-bg-blue-400')"
                                    x-on:dragleave.prevent="$el.classList.remove('pro-bg-blue-400')"
                                    x-on:drop.prevent="
                                      block_key = event.dataTransfer.getData('text/plain');
                                      $wire.addBlock(block_key);
                                      $el.classList.remove('pro-bg-blue-400');"
                                    class="dropzone pro-rounded-md pro-mb-2 pro p-12 pro-border-2 pro-border-gray-600 pro-border-dashed">
                                &nbsp;

                            </div>
                        @endif
                    @endif
                @endforeach
            </main>

            @if($editing)

                <div class="pb-20"></div>
        </div>
    @endif


</div>
