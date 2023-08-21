@props(['key', 'data', 'block'])

@php
    /**
     * The schema is that each menu item has...
     *   - url
     *   - title
     *   - css_classes (optional)
     *   - children[] (optional) << I'm going to leave this as a todo for now.
     */
@endphp

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" class="pro-mb-4" :key="$key">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}"/>

    <div class="pro-relative" x-data="{
        {{$key}}: @entangle("block.content.{$key}"),
        editItem: [],
        addItem() {
            this.{{$key}}.push({title: '', 'url': ''});
        },
        confirmDeleteItem(index) {
              const response = confirm('Permanently delete?');

              if (response) {
                   return this.{{$key}}.splice(index, 1);
              }
        },
        swapPosition(from, to) {
            [this.{{$key}}[from], this.{{$key}}[to]] = [this.{{$key}}[to], this.{{$key}}[from]];
        },
        handleDrop (event, newIndex) {
          let oldIndex = event.dataTransfer.getData('text/plain')
          this.swapPosition(oldIndex, newIndex);
        },
        openEdit(event, index) {

            // Hide other open forms.
            document.getElementById('sortable-{{ $key }}')
                .querySelectorAll('.edit-form').forEach((form) => {
                    form.setAttribute('draggable', true);
                    form.classList.add('pro-hidden');
                });

            // Get data
            this.editItem = this.{{$key}}[index];

            // Open relevant form.
            parent = event.target.closest('li');
            parent.removeAttribute('draggable');
            parent.querySelector('.edit-form').classList.remove('pro-hidden');
        },
        closeEdit(event, index) {
            this.{{$key}}[index] = this.editItem;
            parent = event.target.closest('.edit-form');
            parent.closest('li').setAttribute('draggable', true);
            parent.classList.add('pro-hidden');
        },
        initialize() {
            if(!Array.isArray(this.{{$key}})){
                this.{{$key}} = [];
            }
        }
    }" x-init="initialize()">
        <ul id="sortable-{{$key}}" wire:ignore>
            <template x-for="(item, index) in {{$key}}">
                <li draggable="true"
                    x-on:drop.prevent="handleDrop($event, index); $el.classList.remove('pro-bg-blue-500'); $el.classList.add('pro-bg-white');"
                    x-on:dragstart="event.dataTransfer.setData('text/plain', index);"
                    x-on:dragend="hideDropzone();"
                    x-on:dragover.prevent="$el.classList.add('pro-bg-blue-500');$el.classList.remove('pro-bg-white');"
                    x-on:dragleave.prevent="$el.classList.remove('pro-bg-blue-500');$el.classList.add('pro-bg-white');"
                    class="pro-bg-white pro-cursor-grab pro-block pro-shadow-sm pro-border pro-border-gray-200 pro-px-4 pro-rounded-md pro-py-2 pro-mb-2 pro-flex-grow pro-text-left pro-font-medium pro-gap-2 pro-items-center">
                    <div class="pro-flex">
                        <div class="pro-flex-grow">
                            <span x-text="item.title"></span>
                        </div>
                        <div>
                            <button
                                    x-on:click="openEdit($event, index)"
                                    class="pro-text-blue-500 hover:pro-text-blue-700 hover:pro-underline pro-mr-2">
                                Edit
                            </button>
                            <button class="pro-text-gray-500 hover:pro-text-red-500 pro-relative pro-top-[0.2rem]"
                                    x-on:click="deleteItem(index)">
                                <x-prodigy::icons.close class="pro-w-4"/>
                            </button>
                        </div>
                    </div>
                    <div class="edit-form pro-hidden">
                        <div class="pro-py-3 pro-mt-2 pro-border-t pro-border-gray-100">
                            <x-prodigy::editor.label label="Title" class="text-xs" />
                            <x-prodigy::editor.input type="text" x-model.lazy="editItem.title" class="pro-mb-4" />

                            <x-prodigy::editor.label label="URL" class="text-xs" />
                            <x-prodigy::editor.input type="text" x-model.lazy="editItem.url" class="pro-mb-4" />

                            <x-prodigy::editor.label label="CSS Classes" class="text-xs" />
                            <x-prodigy::editor.input type="text" x-model.lazy="editItem.css_classes" />
                        </div>
                        <button x-on:click="closeEdit($event, index)" class="pro-gray-700 hover:pro-underline pro-pt-2 pro-mb-2">Save & Close</button>
                    </div>

                </li>
            </template>
        </ul>
        <x-prodigy::editor.button
                class="pro-mt-2 pro-text-sm"
                x-on:click="addItem()">+ Add New Menu Item
        </x-prodigy::editor.button>
    </div>

</x-prodigy::editor.field-wrapper>