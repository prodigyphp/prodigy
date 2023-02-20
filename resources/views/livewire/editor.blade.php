@php use ProdigyPHP\Prodigy\Enums\EditorState; @endphp
<aside class="pro-bg-gray-100 pro-order-1 pro-max-h-screen pro-min-h-screen lg:pro-w-1/4 pro-border-r pro-border pro-border-gray-200 pro-flex pro-flex-col">

    <header class="pro-border-b pro-border-gray-100 pro-flex pro-bg-white pro-text-xl pro-p-4">
        <div class="pro-flex-grow">
            {{ $page->title }}
            <button wire:click="$set('editorState','pagesList')">See Pages</button>

        </div>
        <div class="">
            <button wire:click="$emit('stopEditingPage')"
                    class="pro-text-sm pro-shadow-sm pro-bg-blue-400 pro-border pro-border-blue-700 pro-text-white hover:pro-bg-blue-500 pro-py-1 pro-px-3 pro-rounded-sm">
                Done
            </button>
        </div>


    </header>
    <section class="pro-relative pro-flex-grow">

        @if($editorState == 'blocksList')
            <livewire:prodigy-blocks-list :page="$page"></livewire:prodigy-blocks-list>
        @endif

        @if($editorState == 'pagesList')
            <livewire:prodigy-pages-list :page="$page"></livewire:prodigy-pages-list>
        @endif

        @if($editorState == 'blockEditor')
            <livewire:prodigy-edit-block :block="$editing_block"></livewire:prodigy-edit-block>
        @endif
    </section>

</aside>
