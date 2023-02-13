@props(['key', 'meta'])

<div class="pro-mb-4">
    <label class="pro-text-sm pro-text-gray-500 pro-block">
        {{ str($key)->title() }}
    </label>
    <select name="" id=""></select>
{{--    <input type="text" wire:model="block.content.{{$key}}"--}}
{{--           value="{{ $block->content[$key] ?? null }}"--}}
{{--           class="pro-w-full pro-rounded-sm pro-border-gray-200 pro-shadow-sm">--}}
</div>