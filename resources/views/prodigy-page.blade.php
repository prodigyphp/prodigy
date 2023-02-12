<div class="{{ ($editing) ? 'lg:flex w-full h-full' : '' }}">

    @if($editing)
        @isset($cssPath)
            <style>{!! file_get_contents($cssPath) !!}</style>
        @endisset
        <livewire:prodigy-editor :page="$page"></livewire:prodigy-editor>
        <div class="pro-order-2 pro-absolute pro-inset-0 lg:pro-relative lg:pro-min-h-screen lg:pro-max-h-screen lg:pro-inset-auto pro-bg-white pro-flex-grow pro-overflow-scroll">
            @endif

            <main>
                @if(Auth::check() && !$editing)
                    <button class="pro-shadow-xl pro-rounded-sm pro-bg-white pro-fixed pro-top-2 pro-left-2 pro-py-1 pro-px-2 pro-border pro-border-gray-100 pro-text-gray-600 hover:pro-border-blue-400"
                            wire:click="editPage" style="z-index:999;">Edit Page
                    </button>
                @endif

                @foreach($blocks as $block)
                    @if(\View::exists("components.{$block->key}"))
                        <x-prodigy::structure.wrapper wire:key="{{ $block->id }}">
                            <x-prodigy::structure.inner :editing="$editing" :block="$block">
                                <x-dynamic-component :component="$block->key"
                                                     :attributes="new Illuminate\View\ComponentAttributeBag($block->content?->all() ?? [])"></x-dynamic-component>
                            </x-prodigy::structure.inner>
                        </x-prodigy::structure.wrapper>
                    @endif
                @endforeach
            </main>

            @if($editing)
                <div class="pb-20"></div>
        </div>
    @endif


</div>
