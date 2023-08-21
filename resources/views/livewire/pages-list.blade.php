<div class="pro-flex pro-flex-col pro-max-h-screen">
    <x-prodigy::editor.nav label="Pages" :page="$page" currentState="pagesList">
        <button wire:click="$emit('createPage')">
            <x-prodigy::icons.plus class="pro-w-6"></x-prodigy::icons.plus>
        </button>
    </x-prodigy::editor.nav>

    <div class="pro-flex-grow pro-overflow-y-scroll pro-overscroll-contain pro-pb-32">

        @forelse($pages as $page_item)
            <a
                    @class([
        'pro-bg-gray-700/10' => ($page_item->slug == $page->slug),
        'pro-py-3 pro-text-[15px] pro-font-semibold pro-flex pro-items-center pro-w-full hover:pro-bg-gray-700/10 pro-px-4'
        ])
                    href="{{ $page_item->slug  }}?pro_editing=true">

                <p class="pro-flex-grow">{{ $page_item->menu_title }}</p>
                @if(isset($page_item->content['redirect_page']) && $page_item->content['redirect_page'])
                    <div class="pro-text-xs pro-uppercase pro-py-px pro-px-1 pro-text-orange-500 pro-border pro-border-orange-600 pro-mr-2">Redirect</div>
                @endif
                <button wire:click.prevent="$emit('editPageSettings', {{ $page_item->id }})">
                    <x-prodigy::icons.cog class="w-5 hover:pro-text-blue-500"></x-prodigy::icons.cog>
                </button>
            </a>
        @empty
            <p class="pro-mb-4">No pages found.</p>
            <x-prodigy::editor.button class="pro-flex-grow" wire:click="$emit('createPage')">
                Create One
            </x-prodigy::editor.button>
        @endforelse
    </div>
</div>