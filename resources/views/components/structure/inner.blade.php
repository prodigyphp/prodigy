@props(['editing' => false, 'block'])
<div class="inner {{ ($editing) ? 'pro-group pro-relative' : '' }}">
    @if($editing)
        <div wire:click="$emit('editingBlock', {{ $block->id }})" class="pro-absolute pro-inset-0 group-hover:pro-border-2 group-hover:pro-border-blue-400" style="z-index:998;"></div>
        <div class="pro-absolute pro-bg-blue-500 pro-text-white pro-gap-2 pro-hidden group-hover:pro-flex" style="z-index: 999;">
            <button class="pro-px-2 pro-py-1 pro-text-sm" wire:click="$emit('editingBlock', {{ $block->id }})">Edit</button>
            <button class="pro-px-2 pro-py-1 pro-text-sm">Duplicate</button>
            <button class="pro-px-2 pro-py-1 pro-text-sm">Delete</button>
        </div>
    @endif

    {{ $slot }}
</div>