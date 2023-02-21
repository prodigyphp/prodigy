@props(['block' => null, 'editing'])
<div style="{{ ($editing) ? 'padding:30px;' : '' }}">
    @if($block)
        @forelse($block->children as $child)
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
        @empty
        @endforelse
    @endif
</div>