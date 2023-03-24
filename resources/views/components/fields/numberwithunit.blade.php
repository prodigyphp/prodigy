@props(['key', 'data', 'block'])

@php
    // If there is a padding default, show it as the placeholder.
    $placeholder = ($key == 'padding') ? config('prodigy.default.padding', '')  : '';
@endphp

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100" :key="$key">
    <x-prodigy::editor.label :data="$data" :key="$key" for="block.content.{{$key}}"/>


    <div class="pro-flex" x-data="{
        {{$key}}_value: @entangle("block.content.{$key}_value"),
        {{$key}}_unit: @entangle("block.content.{$key}_unit"),
        setDefaultUnit() {
            if(!this.{{$key}}_unit) {
                this.{{$key}}_unit = 'px'
            }
        }
    }" x-init="setDefaultUnit()">
        <div class="pro-flex-grow">
            <x-prodigy::editor.input type="number"
                                     x-model.lazy="{{$key}}_value"
                                     value="{{ $block->content[$key] ?? $data['default'] ?? null }}"/>
        </div>

        <select
                class="pro-flex-shrink pro-min-w-[60px] bg-gray-50 pro-border pro-border-gray-300 pro-shadow-sm pro-text-gray-900 pro-text-sm pro-rounded-sm focus:pro-ring-blue-500 focus:pro-border-blue-500 pro-block pro-p-2.5"
                x-model.lazy="{{$key}}_unit"
                value="{{ $block->content["{$key}_unit"] ?? $data['options'][0] ?? null }}">

            @foreach($data['options'] as $option)
                <option value="{{ $option }}">
                    {{ $option }}
                </option>
            @endforeach

        </select>
    </div>

</x-prodigy::editor.field-wrapper>