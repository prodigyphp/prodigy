@props(['key', 'data'])

<div class="pro-w-full">
    <div class=" mb-2 pro-border-t-8 pro-border-gray-200 px-2 pt-4">
        <span class="pro-bg-gray-100 pro-py-3 pro-text-sm pro-font-medium pro-inline-block">
            {{ str($data['label'] ?? $key)->replace('_', ' ')->title() }}
        </span>
    </div>

    @forelse($data['fields'] as $key => $meta)
        {{ $this->getField($key, $meta) }}
    @empty
        No fields found.
    @endforelse

</div>