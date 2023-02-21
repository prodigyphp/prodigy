<aside class="pro-antialiased pro-fixed pro-top-0 pro-left-0 pro-w-[28rem] pro-bg-gray-100 pro-order-1 pro-max-h-screen pro-min-h-screen pro-border-r pro-border pro-border-gray-200 pro-flex pro-flex-col" style="box-shadow: inset -15px 0 15px -15px rgb(0 0 0 / 15%)">

    @if($editorState == 'blocksList')
        <livewire:prodigy-blocks-list :page="$page"></livewire:prodigy-blocks-list>
    @endif

    @if($editorState == 'pagesList')
        <livewire:prodigy-pages-list :page="$page"></livewire:prodigy-pages-list>
    @endif

    @if($editorState == 'blockEditor')
        <livewire:prodigy-edit-block :block="$editing_block"></livewire:prodigy-edit-block>
    @endif

    @if($editorState == 'pageEditor')
        @if($editing_page)
            <livewire:prodigy-page-edit :page="$editing_page"></livewire:prodigy-page-edit>
        @else
            <livewire:prodigy-page-edit></livewire:prodigy-page-edit>
        @endif

    @endif


</aside>
