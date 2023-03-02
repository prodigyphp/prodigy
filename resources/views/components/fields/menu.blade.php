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

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" class="pro-mb-4">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}"/>

    <div class="pro-relative" x-data="{
        {{$key}}: @entangle("block.content.{$key}"),
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
        edit(event, index) {
            parent = event.target.closest('li');
            parent.removeAttribute('draggable');
            parent.querySelector('.edit-form').classList.remove('pro-hidden');
            console.log(parent);
        },
        closeEdit(event) {
            parent = event.target.closest('.edit-form');

            parent.closest('li').setAttribute('draggable', true);
            parent.classList.add('pro-hidden');
            parent.classList.add('pro-hidden');
        }
    }">
        <ul id="sortable-{{$key}}">
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
                                    x-on:click="edit($event, index)"
                                    class="pro-text-blue-500 hover:pro-text-blue-700 hover:pro-underline pro-mr-2">
                                Edit
                            </button>
                            <button class="pro-text-gray-500 hover:pro-text-red-500 pro-relative pro-top-[0.2rem]"
                                    x-on:click="deleteItem(index)">
                                <x-prodigy::icons.close class="w-4"/>
                            </button>
                        </div>
                    </div>
                    <div class="edit-form pro-hidden">
                        <div class="py-4 mt-2 border-t border-gray-100">
                            <x-prodigy::editor.label label="Title" class="text-xs" />
                            <x-prodigy::editor.input type="text" x-model.lazy="{{$key}}[index].title" class="pro-mb-4" />

                            <x-prodigy::editor.label label="URL" class="text-xs" />
                            <x-prodigy::editor.input type="text" x-model.lazy="{{$key}}[index].url" class="pro-mb-4" />

                            <x-prodigy::editor.label label="CSS Classes" class="text-xs" />
                            <x-prodigy::editor.input type="text" x-model.lazy="{{$key}}[index].css_classes" />
                        </div>
                        <button x-on:click="closeEdit($event)" class="pro-gray-700 hover:pro-underline pro-mb-2">Close</button>
                    </div>

                </li>
            </template>
        </ul>
        <x-prodigy::editor.button
                class="pro-mt-2 pro-text-sm"
                x-on:click="addItem()">+ {{ _('Add Menu Item') }}
        </x-prodigy::editor.button>
    </div>

</x-prodigy::editor.field-wrapper>