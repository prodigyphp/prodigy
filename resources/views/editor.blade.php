<aside class="bg-gray-100 order-1 max-h-screen min-h-screen lg:w-1/4 border-r border border-gray-200 flex flex-col">

    <header class="border-b border-gray-100 flex bg-white text-xl p-4">
        <div class="flex-grow">
        {{ $page->title }}

        </div>
        <div class="">
            <button wire:click="$emit('stopEditingPage')" class="text-sm shadow-sm bg-blue-400 border border-blue-700 text-white hover:bg-blue-500 py-1 px-3 rounded-sm">Done</button>
        </div>


    </header>
    <section class="relative flex-grow">


        <div class="px-4 divide-y divide-gray-200 divide-4">
            @foreach($groups as $group)
                <div class="group pt-4">
                    <h5 class="text-sm text-gray-500 text-300 mb-1 px-2"> {{ $group['title'] }}</h5>
                    <div class="grid grid-cols-2 mb-4">
                        @foreach($blocks->where('group', $group['slug']) as $block)
                            <div class="hover:bg-white flex-grow hover:border-gray-100 hover:shadow-sm rounded-sm transition cursor-grab px-2 py-2">
                                {{ $block['title'] }}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        @if($editing_block)
            <div class="z-20 absolute inset-0 bg-gray-100">
                <livewire:builder.edit-block :block="$editing_block"></livewire:builder.edit-block>
            </div>
        @endif
    </section>

</aside>
