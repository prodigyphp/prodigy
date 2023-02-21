@props(['editing' => false, 'block', 'styles' => ''])

@php
    // @var Collection
    $fields = $block->content ?? collect(); // prevents calling "has" on undefined.

        // initialize variables to nothing.
        $margin_units = config('prodigy.default.unit', 'px');
        $padding_units = config('prodigy.default.unit', 'px');
        $margin_top = $margin_right = $margin_bottom = $margin_left = '';
        $padding_top = $padding_right = $padding_bottom = $padding_left = config('prodigy.default.padding', '');

         // If margin values are united, set all margins.
         if($fields->has('margin_united_values', 'margin_all') && $fields['margin_united_values'] == true) {
             $margin_top = $margin_right = $margin_bottom = $margin_left = $fields['margin_all'];
         }

         // If margin values are set separately, set individually
         if($fields->has('margin_united_values') && $fields['margin_united_values'] == false) {
             $margin_top = $fields['margin_top'] ?? '';
             $margin_right = $fields['margin_right'] ?? '';
             $margin_bottom = $fields['margin_bottom'] ?? '';
             $margin_left = $fields['margin_left'] ?? '';
         }

         // If it's max width, update margin_left and margin_right and set the max width.
         if($fields->has('width', 'max_width') && $fields['width'] == 'fixed') {
                $margin_right = $margin_left = 'auto';
                $styles .= "max-width:{$fields['max_width']}px;";
         }

         // Unset left and right margin if it's full width.
         if($fields->has('width', 'max_width') && $fields['width'] == 'full') {
                $margin_right = $margin_left = '';
         }


         // If margin values are united, set all margins.
         if($fields->has('padding_united_values', 'padding_all') && $fields['padding_united_values'] == true) {
             $padding_top = $padding_right = $padding_bottom = $padding_left = $fields['padding_all'];
         }

         // If padding values are set separately, set individually
         if($fields->has('padding_united_values') && $fields['padding_united_values'] == false) {
             $padding_top = $fields['padding_top'] ?? '';
             $padding_right = $fields['padding_right'] ?? '';
             $padding_bottom = $fields['padding_bottom'] ?? '';
             $padding_left = $fields['padding_left'] ?? '';
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

         // Hide if set to hide, but only when not editing
         if(!$editing && $fields->has('show_on_page') && $fields['show_on_page']) {
             $styles.="";
         }
@endphp

<div class="wrapper" style="{{ $styles }}">
    {{ $slot }}
</div>