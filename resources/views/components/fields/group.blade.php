@props(['key', 'data'])

<div class="pro-w-full" x-data="{ expanded: true }">
    <div @click="expanded = ! expanded" class=" mb-2 pro-border-t-8 pro-border-gray-200 px-2 pt-4">
        <svg :class="{ 'pro--rotate-90': !expanded }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
             fill="currentColor" class="pro-w-5 pro-h-5 pro-inline-block pro-mr-1 pro-transform pro-transition">
            <path fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd"/>
        </svg>
        <span class="pro-bg-gray-100 pro-py-3 pro-text-sm pro-font-medium pro-inline-block hover:pro-cursor-default">
            {{ str($data['label'] ?? $key)->replace('_', ' ')->title() }}
        </span>
    </div>

    <div x-show="expanded">

        @forelse($data['fields'] as $key => $meta)
            {{ $this->getField($key, $meta) }}
        @empty
            No fields found.
        @endforelse
    </div>

</div>