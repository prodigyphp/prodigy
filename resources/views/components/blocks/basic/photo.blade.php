@php extract($content ?? []); @endphp

@php
    if(isset($max_width_value)) {
       $style = "max-width: {$max_width_value}{$max_width_unit};";
    }

    if(isset($alignment)) {
       $alignment_style = "display: flex; justify-content: {$alignment};";
    }
@endphp

@if(isset($link_type) && $link_type == 'url')
    <a href="{{ $link ?? '' }}">
@endif
        <div style="{{ $alignment_style ?? '' }}">
            <img src="{{ $block->getFirstMediaUrl('prodigy_photos', 'large') }}" style="{{ $style ?? '' }}" alt=""/>
        </div>

@if(isset($link_type) && $link_type == 'url' ?? false)
    </a>
@endif