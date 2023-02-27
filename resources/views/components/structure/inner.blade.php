@props(['editing' => false, 'block', 'styles' => '', 'is_column' => false])

@php

    // Set up margin
    if(
        $block->content?->has('width', 'content_width', 'max_width') &&
        $block->content['content_width'] == 'fixed' &&
        $block->content['width'] != 'fixed') {
           $styles = "margin-left: auto; margin-right:auto; max-width:{$block->content['max_width']}px";
    }

    $block_parent_type = ($is_column) ? 'row' : 'page';

    $group_name = ($is_column) ? 'pro-group/column pro-relative' : 'pro-group/row pro-relative';

    $group_hover_border_classes = ($is_column) ?
    'group-hover/column:pro-border-2 group-hover/column:pro-border-blue-400' :
    'group-hover/row:pro-border-2 group-hover/row:pro-border-blue-400';

    $group_hover_action_classes = ($is_column) ?
    'group-hover/column:pro-flex':
    'group-hover/row:pro-flex';

    // Determine if it's a row. If it is, move the editing functionality up a bit.
    $topOffset = (str($block->key)->endsWith('basic.row')) ? ' pro-top-[-30px] ' : '';

    // ensure that the editor shows up.
    if($editing){
        $styles.= 'min-height: 20px;';
    }
@endphp

<div class="prodigy-inner {{ ($editing) ? $group_name : '' }}" style="{{ $styles }}">
    @if($editing)
        <div wire:click="$emit('editBlock', {{ $block->id }})"
             class="{{ $topOffset }} {{ $group_hover_border_classes }} pro-absolute pro-inset-0"
             style="z-index:998;"></div>
        <div x-data
             class="{{ $topOffset }} {{ $group_hover_action_classes }} pro-absolute pro-bg-blue-500 pro-text-white pro-hidden"
             style="z-index: 999;">
            <button class="pro-px-2 pro-py-2 pro-text-sm hover:pro-cursor-grab hover:pro-bg-blue-600">
                <x-prodigy::icons.move class="pro-w-5"/>
            </button>
            <button class="pro-px-2 pro-py-2 pro-text-sm hover:pro-bg-blue-600"
                    wire:click="$emit('editBlock', {{ $block->id }})">
                <x-prodigy::icons.cog class="pro-w-5"/>
            </button>
            <button class="pro-px-2 pro-py-2 pro-text-sm hover:pro-bg-blue-600"
                    wire:click="$emit('duplicateLink', {{$block->pivot->id}})">
                <x-prodigy::icons.m-document-duplicate class="pro-w-5"/>
            </button>
            <button class="pro-px-2 pro-py-2 pro-text-sm hover:pro-bg-blue-600"
                    x-on:click="deleteLink({{$block->pivot->id}})">
                <x-prodigy::icons.m-x-mark class="pro-w-5"/>
            </button>
        </div>
    @endif

    {{ $slot }}
</div>