<div>
    @if($block)
        <x-dynamic-component :component="$block->key"
                             :block="$block"
                             editing="false"
                             :attributes="new Illuminate\View\ComponentAttributeBag($block->content?->all() ?? [])"
                             :content="$block->content?->toArray()"/>
    @else
        {{ _("Block not found") }} – {{ $block_id }}
    @endif
</div>