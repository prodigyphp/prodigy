@props(['block' => null, 'editing'])
<div style="{{ ($editing) ? 'padding:30px;' : '' }};">

    @if($block && $block->children)
        @foreach(range(1, $block->content['columns'] ?? 1) as $column_index)
            <div class="prodigy_column">
                @foreach($block->children->where('pivot.column', $column_index) as $child)

                    @if(!$this->canFindView("{$block->key}"))
                        @continue
                    @endif
                    @if(!$editing && $child->content->has('show_on_page') && $child->content['show_on_page'] == 'hide')
                        @continue
                    @endif

                    <x-prodigy::structure.inner :editing="$editing" :block="$child">
                        <x-dynamic-component :component="$child->key"
                                             :attributes="new Illuminate\View\ComponentAttributeBag($child->content?->all() ?? [])"></x-dynamic-component>
                    </x-prodigy::structure.inner>

                @endforeach
            </div>
        @endforeach

    @endif
</div>