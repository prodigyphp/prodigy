@props(['key', 'data'])

@php
    $value_if_true = $data['label_for_true'] ?? 'True';
    $value_if_false = $data['label_for_false'] ?? 'False';
@endphp

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" x-data :key="$key">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}" class="pro-pb-2"/>
    <div class="pro-flex" x-data="{
            toggle: @entangle("block.content.{$key}"),
            setDefaultValue() {
                if(!this.toggle) {
                    this.toggle = '{{ $data['default'] }}'
                }
            }
        }" x-init="setDefaultValue()">
        <label class="pro-relative pro-inline-flex pro-items-center pro-cursor-pointer">
            <input type="checkbox" x-model="toggle" :checked="toggle" class="pro-sr-only pro-peer">
            <div class="pro-w-11 pro-h-6 pro-bg-gray-200 peer-focus:pro-outline-none peer-focus:pro-ring-4 peer-focus:pro-ring-blue-300 pro-rounded-full pro-peer peer-checked:after:pro-translate-x-full peer-checked:after:pro-border-white after:pro-content-[''] after:pro-absolute after:pro-top-[2px] after:pro-left-[2px] after:pro-bg-white after:pro-border-gray-300 after:pro-border after:pro-rounded-full after:pro-h-5 after:pro-w-5 after:pro-transition-all peer-checked:pro-bg-blue-600"></div>
            <span class="pro-ml-3 pro-text-sm pro-font-medium pro-text-gray-900 pro-dark:text-gray-300" x-show="toggle">{{ $value_if_true }}</span>
            <span class="pro-ml-3 pro-text-sm pro-font-medium pro-text-gray-900 pro-dark:text-gray-300" x-show="!toggle">{{ $value_if_false }}</span>
        </label>
    </div>
</x-prodigy::editor.field-wrapper>