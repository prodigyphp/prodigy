@props(['key', 'width' => 100])
<div class="pro-mb-4" style="width: {{ $width }}%;" wire:key="{{ $key }}">
    <div class="pro-px-2">
    {{ $slot }}
    </div>
</div>