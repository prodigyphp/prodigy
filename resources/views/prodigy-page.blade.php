@php use ProdigyPHP\Prodigy\Facades\Prodigy; @endphp

@section('title')
    {{ $page->title }}
@endsection

@push('pro_head')
    @if($editing)

        @isset($cssPath)
            <style>{!! file_get_contents($cssPath) !!}</style>
            <style>
                body {
                    padding-left: 28rem;
                }
            </style>
        @endisset
        <script src="/vendor/prodigy/js/alpine.js" defer></script>
        <script src="/vendor/prodigy/js/ckeditor.js"></script>
        <script src="/vendor/prodigy/js/codemirror.js"></script>

        @isset($jsPath)
            <script>{!! file_get_contents($jsPath) !!}</script>
        @endisset

    @else

        @if ( isset($page->content['page_css_code']))
            <style>{!! $page->content['page_css_code'] !!}</style>
        @endif

        @if ( isset($page->content['page_js_code']) )
            <script>
                {!! $page->content['page_js_code'] !!}
            </script>
        @endif
    @endif

    <title>{{ $page_seo_title }}</title>
    <meta property="og:title" content="{{ $page_seo_title }}"/>
    <meta property="og:description" content="{{ $page_seo_description }}"/>
    <meta property="og:image" content="{{ $featured_image_url ?? '' }}"/>
    @if(isset($page->content['show_in_search']) && $page->content['show_in_search'] == false)
        <meta name="robots" content="noindex">
    @endif
@endpush

<div class="{{ ($editing) ? 'lg:flex w-full h-full' : '' }} prodigy-page-root">

    @if($editing)

        <livewire:prodigy-editor :page="$page"/>

        <div class="pro-order-2 pro-absolute pro-inset-0 lg:pro-relative lg:pro-min-h-screen lg:pro-max-h-screen lg:pro-inset-auto pro-flex-grow pro-overflow-scroll"
             style="{{ ($editing) ? 'transform: scale(1);transform-origin: center top 0;' : '' }}"
        >
            @endif

            <main>
                <x-prodigy::editor.toggler :editing="$editing"/>

                @forelse($blocks as $block)
                    @if(!Prodigy::canFindView("{$block->key}"))
                        @continue
                    @endif
                    @if(!$editing && ($block->content?->has('show_on_page') && $block->content['show_on_page'] == 'hide'))
                        @continue
                    @endif

                    <x-prodigy::structure.wrapper wire:key="{{ $block->id }}" :editing="$editing"
                                                  :block="$block">
                        @if($editing)
                            <x-prodigy::structure.dropzone style="minimal" :block_order="$block->pivot->order"/>
                        @endif
                        <x-prodigy::structure.inner :editing="$editing" :block="$block">
                            <x-dynamic-component :component="$block->key"
                                                 :block="$block"
                                                 :editing="$editing"
                                                 :content="$block->content?->toArray()"
                                                 :attributes="new Illuminate\View\ComponentAttributeBag($block->content?->all() ?? [])"/>

                        </x-prodigy::structure.inner>
                    </x-prodigy::structure.wrapper>

                @empty
                    @if($editing)
                        <x-prodigy::structure.dropzone block_order="0"
                                                       :style="($blocks->count()) ? 'regular' : 'expanded'">
                            Drag and drop a block
                        </x-prodigy::structure.dropzone>
                    @endif
                @endforelse

                @if($editing)
                    <x-prodigy::structure.dropzone :block_order="$blocks->count() + 1"/>
                @endif
            </main>

            @if($editing)
                <div class="pb-20"></div>
        </div>
    @endif
</div>
