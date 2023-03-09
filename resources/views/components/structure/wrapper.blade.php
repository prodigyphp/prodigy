@props(['editing' => false, 'block', 'styles' => ''])

@php
    // @var Collection
    $fields = $block->content ?? collect(); // prevents calling "has" on undefined.

        // initialize variables to nothing.
        $margin_units = config('prodigy.default.unit', 'px');
        $padding_units = config('prodigy.default.unit', 'px');

        $margin_top = $fields['margin_top'] ?? '';
        $margin_right = $fields['margin_right'] ?? '';
        $margin_bottom = $fields['margin_bottom'] ?? '';
        $margin_left = $fields['margin_left'] ?? '';

        $padding_top = $fields['padding_top'] ?? config('prodigy.default.padding', '');
        $padding_right = $fields['padding_right'] ?? config('prodigy.default.padding', '');
        $padding_bottom = $fields['padding_bottom'] ?? config('prodigy.default.padding', '');
        $padding_left = $fields['padding_left'] ?? config('prodigy.default.padding', '');

         // If it's max width, update margin_left and margin_right and set the max width.
         if($fields->has('width', 'max_width') && $fields['width'] == 'fixed') {
                $margin_right = $margin_left = 'auto';
                $styles .= "max-width:{$fields['max_width']}px;";
         }

         // Unset left and right margin if it's full width.
         if($fields->has('width', 'max_width') && $fields['width'] == 'full') {
                $margin_right = $margin_left = '';
         }

         // Add Units and load into styles or let it be null, so it doesn't render at all.
         $styles .= ($margin_top) ? "margin-top: {$margin_top}{$margin_units};" : '';
         $styles .= ($margin_right) ? "margin-right: {$margin_right}{$margin_units};" : '';
         $styles .= ($margin_bottom) ? "margin-bottom: {$margin_bottom}{$margin_units};" : '';
         $styles .= ($margin_left) ? "margin-left: {$margin_left}{$margin_units};" : '';
         $styles .= ($padding_top) ? "padding-top: {$padding_top}{$padding_units};" : '';
         $styles .= ($padding_right) ? "padding-right: {$padding_right}{$padding_units};" : '';
         $styles .= ($padding_bottom) ? "padding-bottom: {$padding_bottom}{$padding_units};" : '';
         $styles .= ($padding_left) ? "padding-left: {$padding_left}{$padding_units};" : '';

         // Show background color
         if($fields->has('background_color', 'background_type') && ($fields['background_type'] != 'none') ) {
             $styles .= "background-color: {$fields['background_color']};";
         }

         // Show background image
         if($fields->has('background_type') && ($fields['background_type'] == 'photo') ) {
                $url = $block->getFirstMediaUrl('prodigy_photos');

                $styles .= ($url) ? "background-image: url('{$url}');" : '';
                $styles .= ($fields->has('background_size')) ? "background-size: {$fields['background_size']};" : '';
                $styles .= ($fields->has('background_attachment')) ? "background-attachment: {$fields['background_attachment']};" : '';
         }

         // Hide if set to hide, but only when not editing
         if(!$editing && $fields->has('show_on_page') && $fields['show_on_page']) {
             $styles.="";
         }
@endphp

<div class="prodigy-wrapper pro-relative"
     style="{{ $styles }}">
    {{ $slot }}
</div>