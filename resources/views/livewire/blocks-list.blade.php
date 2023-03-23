<div class="pro-flex pro-flex-col pro-max-h-screen" x-data="{active_tab: 'blocks'}">

    <x-prodigy::editor.nav :label="$page->title" :page="$page" currentState="blocksList">
        <x-prodigy::editor.publish-dropdown :page="$page"/>
    </x-prodigy::editor.nav>
    <div class="pro-flex-grow pro-overflow-y-scroll pro-pb-32">
        <nav class="pro-px-4 pro-flex pro-space-x-8 pro-justify-center" aria-label="Tabs">
            <button x-on:click="active_tab = 'blocks'"
                    :class="{'pro-text-blue-600 pro-font-semibold': active_tab == 'blocks'}"
                    class="hover:pro-text-blue-700 pro-whitespace-nowrap pro-py-4 pro-px-1 pro-text-sm">
                {{ _('Blocks') }}
            </button>

            <button x-on:click="active_tab = 'global'"
                    :class="{'pro-text-blue-600 pro-font-semibold': active_tab == 'global'}"
                    class="hover:pro-text-blue-700 pro-whitespace-nowrap pro-py-4 pro-px-1 pro-text-sm"
                    aria-current="page">
                {{ _('Global Content') }}
            </button>
        </nav>
        <div class="pro-px-4" x-show="active_tab == 'blocks'">
            @foreach($groups as $group)
                @foreach($group['folders'] as $folder)
                    @if($folder['blocks']->isEmpty())
                        @continue
                    @endif
                    <div class="pro-w-full pro-pb-4" x-data="{ expanded: true }">
                        <div @click="expanded = ! expanded"
                             class="pro-px-2 pro-pb-2 pro-bg-gray-700/10 pro-mx-[-1rem] pro-py-2">
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
                                            class="pro-text-sm pro-font-medium hover:pro-bg-white pro-flex-grow hover:pro-border-gray-100 hover:pro-shadow-sm pro-rounded-sm pro-transition pro-cursor-grab pro-px-4 pro-py-3">
                                        {{ $block['title'] }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
        <div class="pro-px-4" x-show="active_tab == 'global'">
            <div class="pro-grid pro-grid-cols-2 pro-w-full">
                @foreach ($global_blocks as $block)
                    <div
                            draggable="true"
                            ondragstart="event.dataTransfer.setData('text/plain', '_GLOBAL_{{ $block['id'] }}'); showDropzone()"
                            ondragend="hideDropzone()"
                            class="pro-text-sm pro-font-medium hover:pro-bg-white pro-flex-grow hover:pro-border-gray-100 hover:pro-shadow-sm pro-rounded-sm pro-transition pro-cursor-grab pro-px-4 pro-py-3">
                        {{ $block['global_title'] ?? $block['title'] ?? '' }} <span
                                class="pro-text-gray-400">{{ $block['id'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


</div>