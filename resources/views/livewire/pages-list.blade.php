<div class="pro-px-4">
    @forelse($pages as $page)
            <p>{{ $page->title }}</p>
    @empty
        No pages found.
    @endforelse
</div>