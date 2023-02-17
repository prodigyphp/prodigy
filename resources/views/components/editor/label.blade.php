@php
    $hide = (str($label)->lower() == 'none') ? 'pro-hidden' : '';
@endphp

<label {{$attributes->merge(['class' => "pro-text-sm pro-text-gray-500 pro-block pro-mb-1 {$hide}"]) }}>
    {{ str($label ?? '')->replace('_', ' ')->title() }}
</label>