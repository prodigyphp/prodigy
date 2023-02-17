@props(['editing' => false, 'block', 'styles' => ''])

@php
    // @var Collection
    $fields = $block->content;

         if($fields->has('width', 'max_width') && $fields['width'] == 'fixed') {
                $styles .= "margin-left: auto; margin-right:auto; max-width:{$fields['max_width']}px;";
         }

         if($fields->has('background_color', 'background_type')
            && ($fields['background_type'] == 'color' || $fields['background_type'] == 'photo')
            ) {
             $styles .= "background-color: {$fields['background_color']};";
         }
@endphp

<div class="wrapper" style="{{ $styles }}">
    {{ $slot }}
</div>