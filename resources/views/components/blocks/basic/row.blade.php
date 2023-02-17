@props(['block' => null, 'editing'])
<div style="{{ ($editing) ? 'padding:30px;' : '' }}">
    @if($block)
        @forelse($block->children as $child)
            @if($this->canFindView("{$child->key}"))
                <x-prodigy::structure.inner :editing="$editing" :block="$child">
                    <x-dynamic-component :component="$child->key"
                                         :attributes="new Illuminate\View\ComponentAttributeBag($child->content?->all() ?? [])"></x-dynamic-component>
                </x-prodigy::structure.inner>
            @endif
        @empty
        @endforelse
    @endif
</div>