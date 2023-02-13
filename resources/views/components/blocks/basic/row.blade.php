@props(['block'])
<div>
    @foreach($block->children as $child)
        @if($this->canFindView("{$child->key}"))
            <x-dynamic-component :component="$child->key"
                                 :attributes="new Illuminate\View\ComponentAttributeBag($child->content?->all() ?? [])"></x-dynamic-component>
        @endif
    @endforeach
</div>