<div class="">

    <x-prodigy::editor.nav :label="$page->title" :page="$page" currentState="blocksList">
        <button wire:click="$emit('closeProdigyPanel')"
                class="pro-text-sm pro-font-bold pro-shadow-sm pro-bg-blue-500 pro-text-white hover:pro-bg-blue-600 pro-py-1 pro-px-3 pro-rounded-sm">
            Publish
        </button>
    </x-prodigy::editor.nav>

    <header class=" pro-p-4 pro-hidden">
        <div class="pro-flex pro-w-full">
            <div class="pro-flex-grow pro-text-xl">
                {{ $page->title }}

            </div>
            <div class="">

            </div>
        </div>

    </header>

    <div class="pro-px-4">
        @foreach($groups as $group)
            @foreach($group['folders'] as $folder)
                <div class="pro-w-full pro-pb-4" x-data="{ expanded: true }">
                    <div @click="expanded = ! expanded" class="px-2 pb-2 pro-bg-gray-700/10 pro-mx-[-1rem] pro-py-2">
                        <svg :class="{ 'pro--rotate-90': !expanded }" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             class="pro-w-5 pro-h-5 pro-inline-block  pro-transform pro-transition">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span class=" pro-text-sm pro-font-medium pro-inline-block hover:pro-cursor-default">{{ $group['title'] }} - {{ $folder['title'] }}</span>
                    </div>

                    <div x-show="expanded" class="pro-flex pro-flex-wrap pro-pt-1">

                        <div class="pro-grid pro-grid-cols-2 pro-w-full">
                            @foreach ($folder['blocks'] as $block)
                                <div
                                        draggable="true"
                                        ondragstart="event.dataTransfer.setData('text/plain', '{{ $block['key'] }}'); showDropzone()"
                                        ondragend="hideDropzone()"
                                        class="pro-text-sm hover:pro-bg-white pro-flex-grow hover:pro-border-gray-100 hover:pro-shadow-sm pro-rounded-sm pro-transition pro-cursor-grab pro-px-4 pro-py-3">
                                    {{ $block['title'] }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>