@props(['active' => null])
@php
    $classes = 'pro-flex pro-items-center pro-gap-2 pro-w-full pro-px-4 pro-py-2.5 pro-text-left pro-text-sm  disabled:pro-text-gray-500';
    if($active) {
        $classes .= ' pro-bg-blue-500 pro-text-white pro-cursor-default';
    } else {
        $classes .= ' hover:pro-bg-gray-50';
    }
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>