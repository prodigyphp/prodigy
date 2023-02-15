@props(['key', 'meta'])

<div class="pro-mb-4">
    <label class="pro-text-sm pro-text-gray-500 pro-block">
        {{ str($key)->title() }}
    </label>
    <input type="text" wire:model="block.content.{{$key}}"
           value="{{ $block->content[$key] ?? null }}"
           class="text-sm pro-w-full pro-rounded-sm pro-border-gray-300 bg-gray-50 pro-shadow-sm">
</div>