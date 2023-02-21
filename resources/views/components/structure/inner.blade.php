@props(['editing' => false, 'block', 'styles' => ''])

@php
    if(
        $block->content?->has('width', 'content_width', 'max_width') &&
        $block->content['content_width'] == 'fixed' &&
        $block->content['width'] != 'fixed') {
           $styles = "margin-left: auto; margin-right:auto; max-width:{$block->content['max_width']}px";
    }

    // Determine if it's a row. If it is, move the editing functionality up a bit.
    $topOffset = (str($block->key)->endsWith('basic.row')) ? ' pro-top-[-30px] ' : '';
@endphp

<div class="inner {{ ($editing) ? 'pro-group pro-relative' : '' }}" style="{{ $styles }}">
    @if($editing)
        <div wire:click="$emit('editBlock', {{ $block->id }})"
             class="{{ $topOffset }} pro-absolute pro-inset-0 group-hover:pro-border-2 group-hover:pro-border-blue-400"
             style="z-index:998;"></div>
        <div class="{{ $topOffset }} pro-absolute pro-bg-blue-500 pro-text-white pro-gap-2 pro-hidden group-hover:pro-flex"
             style="z-index: 999;">
            <button class="pro-px-2 pro-py-1 pro-text-sm" wire:click="$emit('editBlock', {{ $block->id }})">Edit
            </button>
            <button class="pro-px-2 pro-py-1 pro-text-sm" wire:click="$emit('duplicateBlock', {{ $block->id }})">
                Duplicate
            </button>
            <button class="pro-px-2 pro-py-1 pro-text-sm" wire:click="$emit('deleteBlock', {{ $block->id }})">Delete
            </button>
        </div>
    @endif

    {{ $slot }}
</div>