@props(['key' => rand(1,9999999), 'width' => 100])
<div class="pro-mb-4" style="width: {{ $width }}%;">
    <div class="pro-px-2">
    {{ $slot }}
    </div>
</div>