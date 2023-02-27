@php
    $child_width = (isset($columns) && $columns) ? 1 / $columns * 100 : 100;
@endphp

<div class="prodigy-content-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); grid-gap: 1.5rem;">
    @forelse ($block->children as $child_block)
        @if($child_block->content)
            <div class="" style="">
                @if($child_block->content['link_type'] ?? false)
                    <a href="{{ $child_block->content['link'] ?? '' }}">
                @endif
                <img src="{{ $child_block->getFirstMediaUrl('prodigy_photos', 'large') }}" alt="">
                        @if($child_block->content['link_type'] ?? false)
                    </a>
                @endif

                <h3 class="">
                    {{ $child_block->content['title'] ?? '' }}
                </h3>
                {!! $child_block->content['body'] ?? '' !!}

                    @if($child_block->content['link_type'] ?? false)
                        <a href="{{ $child_block->content['link'] ?? '' }}" class="button">
                            {{ $child_block->content['link_label'] ?? '' }}
                        </a>
                    @endif
            </div>
        @endif
    @empty
    @endforelse
</div>