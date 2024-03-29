@props(['block', 'label'])

<div {{ $attributes->merge(['class'=> 'pro-block pro-bg-white pro-shadow pro-pl-2 pro-pr-4 pro-rounded-md pro-py-2 pro-mb-2 pro-flex-grow pro-text-left pro-font-medium pro-flex pro-gap-2 pro-items-center']) }}>
    <div class="hover:pro-cursor-grab">
        <x-prodigy::icons.move class="pro-w-4 pro-text-gray-500"/>
    </div>
    <div class="pro-flex-grow pro-text-ellipsis	pro-whitespace-nowrap pro-overflow-hidden">
        {{ $label }}
    </div>
    <div class="pro-shrink-0">
        {{ $actions }}
    </div>
</div>