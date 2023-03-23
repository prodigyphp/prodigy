@php extract($content ?? []); @endphp
@php
    // I'm not sure why I had it dynamically querying.
    //    $children = $block->children()->withPivot('order', 'column', 'id')->get();
    $children = $block->children;
@endphp
<div style="{{ ($editing) ? 'padding:20px;' : '' }} display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); grid-gap: 1.5rem;"
     class="">

    @if($block)
        @foreach(range(1, $block->content['columns'] ?? 1) as $column_index)
            <div class="prodigy_column">
                @foreach($children->where('pivot.column', $column_index) as $child)
                <p class="pro-font-bold">{{ $child->pivot?->order }} • {{ $child->id }}</p>
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

                <x-prodigy::structure.dropzone :block_order="$block->pivot?->order"
                                               :column_order="$block->children->where('pivot.column', $column_index)->count() + 1"
                                               :column_index="$column_index"/>
            </div>
        @endforeach

    @endif
</div>