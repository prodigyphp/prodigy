@props(['active' => null])

@php
    $classes = 'pro-py-3 pro-text-sm pro-font-regular pro-flex pro-items-center pro-w-full hover:pro-bg-gray-700/10 pro-px-4';
    if($active) {
        $classes .= ' pro-bg-gray-700/10';
    } else {
        $classes .= '';
    }
@endphp
<button {{ $attributes->merge(['class' => $classes]) }}>
    <p class="pro-flex-grow pro-text-left">{{ $title }}</p>

    <div>
        {{ $actions }}
    </div>
</button>