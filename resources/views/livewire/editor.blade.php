<aside class="pro-antialiased pro-fixed pro-top-0 pro-left-0 pro-w-[28rem] pro-bg-gray-100 pro-order-1 pro-max-h-screen pro-min-h-screen pro-border-r pro-border pro-border-gray-200 pro-flex pro-flex-col"
       style="box-shadow: inset -15px 0 15px -15px rgb(0 0 0 / 15%)">

    @if($editorState == 'blocksList')
        <livewire:prodigy-blocks-list :page="$page"></livewire:prodigy-blocks-list>
    @endif

    @if($editorState == 'pagesList')
        <livewire:prodigy-pages-list :page="$page"></livewire:prodigy-pages-list>
    @endif

    @if($editorState == 'blockEditor')
        <livewire:prodigy-edit-block key="{{ now() }}" :block="$editing_block"></livewire:prodigy-edit-block>
    @endif

    @if($editorState == 'entriesList')
        <livewire:prodigy-entries-list key="{{ now() }}" :page="$page" :type="$viewing_entries_type"></livewire:prodigy-entries-list>
    @endif

    @if($editorState == 'entryEditor')
        <livewire:prodigy-edit-entry key="{{ now() }}" :entry="$editing_entry"></livewire:prodigy-edit-entry>
    @endif

    @if($editorState == 'pageEditor')
            <livewire:prodigy-page-settings-edit :page="$editing_page ?? new ProdigyPHP\Prodigy\Models\Page()"></livewire:prodigy-page-settings-edit>
    @endif


</aside>
