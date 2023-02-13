<aside class="pro-bg-gray-100 pro-order-1 pro-max-h-screen pro-min-h-screen lg:pro-w-1/4 pro-border-r pro-border pro-border-gray-200 pro-flex pro-flex-col">

    <header class="pro-border-b pro-border-gray-100 pro-flex pro-bg-white pro-text-xl pro-p-4">
        <div class="pro-flex-grow">
            {{ $page->title }}

        </div>
        <div class="">
            <button wire:click="$emit('stopEditingPage')"
                    class="pro-text-sm pro-shadow-sm pro-bg-blue-400 pro-border pro-border-blue-700 pro-text-white hover:pro-bg-blue-500 pro-py-1 pro-px-3 pro-rounded-sm">
                Done
            </button>
        </div>


    </header>
    <section class="pro-relative pro-flex-grow">


        <div class="pro-px-4">
            @foreach($groups as $group)
                <div class="pro-group pro-pt-4">
                    <h5 class="pro-px-2 pro-text-md pro-text-gray-700 pro-text-500  pro-py-2 pro-mb-2"> {{ $group['title'] }}</h5>
                    @foreach($group['folders'] as $folder)
                        <h5 class="pro-text-md pro-text-gray-500 pro-bg-gray-50 pro-text-300 pro-mb-1 pro-px-2 pro-py-2">{{ $folder['title'] }}</h5>

                        <div class="pro-grid pro-grid-cols-2 pro-mb-4">
                            @foreach ($folder['blocks'] as $block)
                                <div
                                        draggable="true"
                                        ondragstart="event.dataTransfer.setData('text/plain', '{{ $block['key'] }}');"
                                        class="pro-text-sm hover:pro-bg-white pro-flex-grow hover:pro-border-gray-100 hover:pro-shadow-sm pro-rounded-sm pro-transition pro-cursor-grab pro-px-4 pro-py-2">
                                    {{ $block['title'] }}
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

        @if($editing_block)
            <div class="pro-z-20 pro-absolute pro-inset-0 pro-bg-gray-100">
                <livewire:prodigy-edit-block :block="$editing_block"></livewire:prodigy-edit-block>
            </div>
        @endif
    </section>

</aside>
