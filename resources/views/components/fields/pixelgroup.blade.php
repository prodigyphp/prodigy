@props(['key', 'data', 'block'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100">
    <x-prodigy::editor.label
            :label="$data['label'] ?? $key"
            for="block.content.{{$key}}"
            :help="$data['help'] ?? ''">
    </x-prodigy::editor.label>


    <div class="pro-flex pro-gap-2" x-data="{
        {{$key}}_united_values: @entangle("block.content.{$key}_united_values"),
        {{$key}}_all: @entangle("block.content.{$key}_all"),
        {{$key}}_top: @entangle("block.content.{$key}_top"),
        {{$key}}_right: @entangle("block.content.{$key}_right"),
        {{$key}}_bottom: @entangle("block.content.{$key}_bottom"),
        {{$key}}_left: @entangle("block.content.{$key}_left"),
    }">

        <div class="pro-bg-gray-200 pro-flex pro-gap-1 pro-rounded-sm">
            <button class="pro-p-2 pro-rounded-sm pro-m-px pro-text-gray-600"
                    :class="{ 'pro-bg-white': {{$key}}_united_values }"
                    x-on:click="{{$key}}_united_values = true">
                <x-prodigy::icons.square-rounded class="pro-w-5 pro-h-5"></x-prodigy::icons.square-rounded>
            </button>
            <button class="pro-p-2 pro-rounded-sm pro-m-px pro-text-gray-600"
                    x-on:click="{{$key}}_united_values = false;"
                    :class="{ 'pro-bg-white': !{{$key}}_united_values }"
            >
                <x-prodigy::icons.square-exploded class="pro-w-5 pro-h-5"></x-prodigy::icons.square-exploded>
            </button>
        </div>

        <div class="pro-flex pro-gap-1 pro-flex-grow">
            <x-prodigy::editor.input x-model="{{$key}}_all" x-show="{{$key}}_united_values" class="pro-text-center"/>

            <div class="property-top-line" x-show="!{{$key}}_united_values">
                <x-prodigy::editor.input x-model="{{$key}}_top"
                                         class="pro-text-center"/>
            </div>
            <div class="property-right-line" x-show="!{{$key}}_united_values">
                <x-prodigy::editor.input x-model="{{$key}}_right"
                                         class="pro-text-center"/>
            </div>
            <div class="property-bottom-line" x-show="!{{$key}}_united_values">
                <x-prodigy::editor.input x-model="{{$key}}_bottom"
                                         class="pro-text-center"/>
            </div>
            <div class="property-left-line" x-show="!{{$key}}_united_values">
                <x-prodigy::editor.input x-model="{{$key}}_left"
                                         class="pro-text-center"/>
            </div>
        </div>
    </div>

</x-prodigy::editor.field-wrapper>