<div class="{{ ($editing) ? 'lg:flex w-full h-full' : '' }}">

    @if($editing)
        <livewire:builder.editor-mode :page="$page"></livewire:builder.editor-mode>
        <div class="order-2 absolute inset-0 lg:relative lg:min-h-screen lg:max-h-screen lg:inset-auto bg-white dark:bg-gray-800 flex-grow overflow-scroll">
    @endif

    <main>
        @if(Auth::check() && !$editing)
            <button class="shadow-xl rounded-sm bg-white fixed top-2 left-2 py-1 px-2 border border-gray-100 text-gray-600 hover:border-blue-400" wire:click="editPage" style="z-index:999;">Edit Page</button>
        @endif

        @foreach($blocks as $block)
            @if(\View::exists("components.{$block->key}"))
                <x-builder.wrapper wire:key="{{ $block->id }}">
                    <x-builder.inner :editing="$editing" :block="$block">
                        <x-dynamic-component :component="$block->key" :attributes="new Illuminate\View\ComponentAttributeBag($block->content?->all() ?? [])"></x-dynamic-component>
                    </x-builder.inner>
                </x-builder.wrapper>
            @endif
        @endforeach
    </main>

    @if($editing)
        <div class="pb-20"></div>
        </div>
    @endif


</div>
