@php extract($content ?? []); @endphp
@php
    $column_count = $block->content['columns'] ?? 1;
    $column_widths = [  $block->content['column_1_width'] ?? 0,
                        $block->content['column_2_width'] ?? 0,
                        $block->content['column_3_width'] ?? 0,
                        $block->content['column_4_width'] ?? 0];

@endphp

<style>
    .prodigy-row-{{$block->id}}         {
        display: flex;
        width: 100%;
    }

    .prodigy-row-{{$block->id}}   > .prodigy-column {
        flex-basis: 1fr;
        flex-grow: 1;
    }

    @foreach($column_widths as $column_width)
        .prodigy-row-{{$block->id}}   > .prodigy-column-{{$loop->index + 1}} {
            flex-basis: {{$column_width}}%;
        }
    @endforeach

    @media (max-width: 1023px) {
        .prodigy-row-{{$block->id}}     {
            flex-wrap: wrap;
        }
    }

    @media (max-width: 767px) {
        .prodigy-row-{{$block->id}}   > .prodigy-column {
            width: 100%;
            flex-basis: 100%;
        }
    }
</style>

<div style="{{ ($editing) ? 'padding:20px;' : '' }}" class="prodigy-row-{{ $block->id }}">

    @if($block)
        @foreach(range(1, $column_count) as $column_index)
            <div class="prodigy-column prodigy-column-{{$column_index}}">
                @foreach($block->children->where('pivot.column', $column_index) as $child)
                    @if(!Prodigy::canFindView("{$block->key}"))
                        @continue
                    @endif
                    @if(!$editing && $child->content?->has('show_on_page') && $child->content['show_on_page'] == 'hide')
                        @continue
                    @endif

                    <x-prodigy::structure.inner :editing="$editing" :block="$child" is_column="true">
                        @if($editing)
                            <x-prodigy::structure.dropzone :block_order="$block->pivot?->order"
                                                           :column_order="$child->pivot?->order" style="minimal"
                                                           :column_index="$column_index"/>
                        @endif
                        <x-dynamic-component :component="$child->key"
                                             :block="$child"
                                             :editing="$editing"
                                             :attributes="new Illuminate\View\ComponentAttributeBag($child->content?->all() ?? [])"
                                             :content="$child->content?->toArray()"/>

                    </x-prodigy::structure.inner>
                @endforeach
                @if($editing)
                    <x-prodigy::structure.dropzone :block_order="$block->pivot?->order"
                                                   :column_order="$block->children->where('pivot.column', $column_index)->count() + 1"
                                                   :column_index="$column_index"/>
                @endif
            </div>
        @endforeach

    @endif
</div>