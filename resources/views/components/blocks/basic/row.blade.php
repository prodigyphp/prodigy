@props(['block' => null, 'editing'])
<div style="{{ ($editing) ? 'padding:30px;' : '' }};" class="pro-grid pro-grid-cols-{{ $block->content['columns'] }}">

    @if($block && $block->children)
        @foreach(range(1, $block->content['columns'] ?? 1) as $column_index)
            <div class="prodigy_column">
                @foreach($block->children->where('pivot.column', $column_index) as $child)

                    @if(!$this->canFindView("{$block->key}"))
                        @continue
                    @endif
                    @if(!$editing && $child->content?->has('show_on_page') && $child->content['show_on_page'] == 'hide')
                        @continue
                    @endif

                    <x-prodigy::structure.inner :editing="$editing" :block="$child" is_column="true">
                        @if($editing)
                            <x-prodigy::structure.dropzone :block_order="$block->pivot->order" style="minimal" :column_index="$column_index"/>
                        @endif
                        <x-dynamic-component :component="$child->key"
                                             :attributes="new Illuminate\View\ComponentAttributeBag($child->content?->all() ?? [])" />

                    </x-prodigy::structure.inner>
                @endforeach

                <x-prodigy::structure.dropzone :block_order="$block->pivot->order" :column_index="$column_index"/>
            </div>
        @endforeach

    @endif
</div>