@props(['key', 'data'])

<x-prodigy::editor.field-wrapper :width="$data['width'] ?? 100">
    <x-prodigy::editor.label
            :label="$data['label'] ?? $key"
            for="block.content.{{$key}}"
            :help="$data['help'] ?? ''">
    </x-prodigy::editor.label>

    <select
            class="pro-w-full bg-gray-50 pro-border pro-border-gray-300 pro-text-gray-900 pro-text-sm pro-rounded-sm focus:pro-ring-blue-500 focus:pro-border-blue-500 pro-block pro-p-2.5"
            name="block.content.{{$key}}"
            id="block.content.{{$key}}"
            wire:model="block.content.{{$key}}">

        @foreach($data['options'] as $option)
            <option value="{{ Str::of($option)->slug() }}">{{ $option }}</option>
        @endforeach

    </select>
</x-prodigy::editor.field-wrapper>