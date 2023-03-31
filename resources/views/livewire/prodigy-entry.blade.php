@push('pro_head')
    @if($editing)
        @isset($cssPath)
            <style>{!! file_get_contents($cssPath) !!}</style>
        @endisset

        <script src="/vendor/prodigy/js/alpine.js" defer></script>
        <script src="/vendor/prodigy/js/ckeditor.js"></script>
        <script src="/vendor/prodigy/js/codemirror.js"></script>
        @isset($jsPath)
            <script>{!! file_get_contents($jsPath) !!}</script>
        @endisset
    @endif

@endpush

<div class="pro-relative">

    <x-prodigy::editor.toggler :editing="$editing" left="28rem"/>
    @if($editing)
        <style>
            body {
                padding-left: 28rem;
            }
        </style>
        <div class="pro-fixed pro-inset-0 pro-right-auto  pro-z-[9999] pro-flex">
            <div class="pro-bg-white pro-overscroll-contain pro-mx-auto pro-max-w-[28rem] pro-z-[1000] not-prose lg:not-prose pro-antialiased pro-relative pro-h-screen pro-overflow-y-scroll">
                <livewire:prodigy-editor :entry_id="$entry->id"/>
            </div>
        </div>
    @endif

</div>