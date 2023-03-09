@php extract($content ?? []); @endphp
@php
    $gap = $gap_value ?? 0;
    $gap .= $gap_unit ?? 'px';
@endphp

<style>

    .prodigy-content-grid {
        display: grid;
        grid-gap: {{ $gap }};
        grid-template-columns: repeat({{ $columns_xs ?? 1 }}, minmax(0, 1fr));
        justify-content: {{ $alignment ?? 'start' }};
    }

    @media (min-width: 768px) {
        .prodigy-content-grid {
            grid-template-columns: repeat({{ $columns_md ?? 2 }}, minmax(0, 1fr));
        }
    }

    @media (min-width: 1024px) {
        .prodigy-content-grid {
            grid-template-columns: repeat({{ $columns_lg ?? 4 }}, minmax(0, 1fr));
        }
    }
</style>

<div class="prodigy-content-grid">
    @forelse ($block->children as $child_block)
        @if($child_block->content)
            <div class="">
                @if($child_block->content['link_type'] ?? false)
                    <a href="{{ $child_block->content['link'] ?? '' }}">
                        @endif
                        <img src="{{ $child_block->getFirstMediaUrl('prodigy_photos') }}" alt=""/>

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