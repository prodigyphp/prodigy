@props(['key', 'data', 'block'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100">
    <x-prodigy::editor.label
            :label="$data['label'] ?? $key"
            for="block.content.{{$key}}"
            :help="$data['help'] ?? ''">
    </x-prodigy::editor.label>


    <div class="pro-relative pro-aspect-[16/9]" x-data="{
        {{$key}}_united_values: @entangle("block.content.{$key}_united_values"),
        {{$key}}_top: @entangle("block.content.{$key}_top"),
        {{$key}}_right: @entangle("block.content.{$key}_right"),
        {{$key}}_bottom: @entangle("block.content.{$key}_bottom"),
        {{$key}}_left: @entangle("block.content.{$key}_left"),
        mergeValues(event) {
            if(this.{{$key}}_united_values) {
                this.{{$key}}_top = this.{{$key}}_right = this.{{$key}}_bottom = this.{{$key}}_left = event.target.value
            }
        }
    }">

        <div class="pro-absolute pro-left-1/2 pro-w-[34%] pro-ml-[-17%] pro-top-0">
            <label for="{{$key}}_top" class="pro-text-gray-400 pro-text-xs pro-absolute pro-top-1.5 pro-left-1">T</label>
            <input type="text" x-model.lazy="{{$key}}_top" x-on:keyup="mergeValues($event)" id="{{$key}}_top" class="pro-w-full pro-bg-transparent pro-border-0 pro-border-b pro-border-gray-200 pro-text-sm pro-py-1 pro-pr-1 pro-pl-5 focus:pro-ring-0 focus:pro-border-blue-500">
        </div>

        <div class="pro-absolute pro-right-0 pro-w-[34%] pro-mt-[-5%] pro-top-1/2">
            <label for="{{$key}}_right" class="pro-text-gray-400 pro-text-xs pro-absolute pro-top-1.5 pro-left-1">R</label>
            <input type="text" x-model.lazy="{{$key}}_right" id="{{$key}}_right" class="pro-w-full pro-bg-transparent pro-border-0 pro-border-b pro-border-gray-200 pro-text-sm pro-py-1 pro-pr-1 pro-pl-5 focus:pro-ring-0 focus:pro-border-blue-500">
        </div>

        <div class="pro-absolute pro-left-1/2 pro-w-[34%] pro-ml-[-17%] pro-bottom-0">
            <label for="{{$key}}_bottom" class="pro-text-gray-400 pro-text-xs pro-absolute pro-top-1.5 pro-left-1">B</label>
            <input type="text" x-model.lazy="{{$key}}_bottom" id="{{$key}}_bottom" class="pro-w-full pro-bg-transparent pro-border-0 pro-border-b pro-border-gray-200 pro-text-sm pro-py-1 pro-pr-1 pro-pl-5 focus:pro-ring-0 focus:pro-border-blue-500">
        </div>

        <div class="pro-absolute pro-left-0 pro-w-[34%] pro-mt-[-5%] pro-top-1/2">
            <label for="{{$key}}_left" class="pro-text-gray-400 pro-text-xs pro-absolute pro-top-1.5 pro-left-1">L</label>
            <input type="text" x-model.lazy="{{$key}}_left" id="{{$key}}_left" class="pro-w-full pro-bg-transparent pro-border-0 pro-border-b pro-border-gray-200 pro-text-sm pro-py-1 pro-pr-1 pro-pl-5 focus:pro-ring-0 focus:pro-border-blue-500">
        </div>

        <div class="pro-absolute pro-left-1/2 pro-top-1/2 pro-w-[16px] pro-h-[16px] pro-ml-[-12px] pro-mt-[-4px]">
            <x-prodigy::icons.icon-lock-closed
                    x-show="{{$key}}_united_values"
                    x-on:click="{{$key}}_united_values = false"
                    class="pro-text-gray-900 pro-absolute pro-inset-0 pro-relative pro-left-[-2px]" />

            <x-prodigy::icons.icon-lock-open
                    x-show="!{{$key}}_united_values"
                    x-on:click="{{$key}}_united_values = true"
                    class="pro-text-gray-400 pro-absolute pro-inset-0" />
        </div>
    </div>

</x-prodigy::editor.field-wrapper>