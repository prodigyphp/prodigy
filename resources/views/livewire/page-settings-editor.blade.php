<div class="pro-bg-gray-100 pro-flex-grow pro-flex pro-flex-col pro-h-full pro-overflow-y-scroll pro-overscroll-contain">
    <x-prodigy::editor.nav :label="$title" :page="$block" currentState="pageEditor">
        <button class="pro-text-red-500 hover:pro-text-red-700 pro-text-[14px] pro-font-semibold"
                x-on:click="deletePage({{ $block->id }})">
           Delete
        </button>
    </x-prodigy::editor.nav>
    <div class="pro-flex-grow pro-overflow-scroll pro-px-4">
        @if($errors->isNotEmpty())
            @foreach($errors->all() as $error)
                <p class="pro-text-red-500 pro-text-sm mb-2">{{ $error }}</p>
            @endforeach
        @endif

        <x-prodigy::editor.field-wrapper>
            <x-prodigy::editor.label label="Page Title" for="title"></x-prodigy::editor.label>
            <x-prodigy::editor.input wire:model="block.title" id="title"/>
        </x-prodigy::editor.field-wrapper>

        <x-prodigy::editor.field-wrapper>
            <x-prodigy::editor.label label="Page Slug" for="slug"></x-prodigy::editor.label>
            <x-prodigy::editor.input wire:model="block.slug" id="slug" />
        </x-prodigy::editor.field-wrapper>

        <x-prodigy::editor.field-wrapper>
            <x-prodigy::editor.label label="Page Status" for="title"></x-prodigy::editor.label>
            <div class="pro-flex" x-cloak x-data="{
                    toggle: false,
                    published_at: @entangle("block.published_at"),
                    setDefaultValue() {
                        if(!this.published_at) {
                            this.published_at = ''
                        }
                        if(this.published_at) {
                            this.toggle = true
                        }
                    },
                    toggleValue() {
                        if(this.toggle) {
                            this.published_at = null;
                        } else {
                            let date = new Date().toISOString().slice(0, 19).replace('T', ' ');;
                            this.published_at = date;
                        }
                    }
                }" x-init="setDefaultValue()">
                <label class="pro-relative pro-inline-flex pro-items-center pro-cursor-pointer">
                    <input type="hidden" x-model="published_at">
                    <input type="checkbox" x-model="toggle" x-on:click="toggleValue()" :checked="toggle" class="pro-sr-only pro-peer">
                    <div class="pro-w-11 pro-h-6 pro-bg-gray-200 peer-focus:pro-outline-none peer-focus:pro-ring-4 peer-focus:pro-ring-blue-300 pro-rounded-full pro-peer peer-checked:after:pro-translate-x-full peer-checked:after:pro-border-white after:pro-content-[''] after:pro-absolute after:pro-top-[2px] after:pro-left-[2px] after:pro-bg-white after:pro-border-gray-300 after:pro-border after:pro-rounded-full after:pro-h-5 after:pro-w-5 after:pro-transition-all peer-checked:pro-bg-blue-600"></div>
                    <span class="pro-ml-3 pro-text-sm pro-font-medium pro-text-gray-900 pro-dark:text-gray-300"
                          x-show="toggle">Published</span>
                    <span class="pro-ml-3 pro-text-sm pro-font-medium pro-text-gray-900 pro-dark:text-gray-300"
                          x-show="!toggle">Draft</span>
                </label>
            </div>
        </x-prodigy::editor.field-wrapper>

        @if($schema)
            @foreach($schema['fields'] as $key => $meta)
                {{ $this->getField($key, $meta) }}
            @endforeach
        @else
            No editable fields found.
        @endif


    </div>

    <div class="pro-flex pro-gap-2 pro-p-2 pro-w-full">
        <button wire:click="save"
                class="pro-bg-white pro-flex-grow pro-px-2 pro-py-2 pro-rounded-md hover:pro-ring-2 hover:pro-ring-blue-300">
            Save
        </button>
        <button wire:click="close"
                class="pro-bg-white pro-flex-grow pro-px-2 pro-py-2 pro-rounded-md hover:pro-ring-2 hover:pro-ring-blue-300">
            Cancel
        </button>
    </div>
</div>