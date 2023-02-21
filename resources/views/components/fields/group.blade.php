@props(['key', 'data'])

<div class="pro-w-full pro-pb-4" x-data="{ expanded: @js($data['expanded'] ?? 0) }">
    <div @click="expanded = ! expanded" class=" pro-px-5 pro-bg-gray-700/10 pro-mx-[-1rem] pro-py-2 pro-mb-2">
        <svg :class="{ 'pro--rotate-90': !expanded }" xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 20 20"
             fill="currentColor"
             class="pro-w-5 pro-h-5 pro-inline-block pro-transform pro-transition">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"/>
        </svg>
        <span class=" pro-text-sm pro-font-medium pro-inline-block hover:pro-cursor-default">{{ str($data['label'] ?? $key)->replace('_', ' ')->title() }}</span>
    </div>

    <div x-show="expanded" class="pro-flex pro-flex-wrap pro-pt-1">
        @forelse($data['fields'] as $key => $meta)
            {{ $this->getField($key, $meta) }}
        @empty
            No fields found.
        @endforelse
    </div>

</div>