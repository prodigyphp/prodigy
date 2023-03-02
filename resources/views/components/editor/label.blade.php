@props(['data', 'key'])
@php
    $label = $data['label'] ?? $key;
    $hide = (str($label)->lower() == 'none') ? 'pro-hidden' : '';
    $help = $data['help'] ?? ''; // not used yet.
@endphp

<label {{$attributes->merge(['class' => "pro-text-sm pro-text-gray-700 pro-block pro-mb-1 {$hide}"]) }}>
    {{ str($label ?? '')->replace('_', ' ')->title() }}
</label>