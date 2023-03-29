@props(['editing'])

@if(Prodigy::userCanAccessEditor())
    @if(!$editing)
        <button wire:click="openProdigyPanel"
                style="z-index:9999;position: fixed; top:0; left:0;">
            <div style="background:#f5f5f5; transform:rotate(45deg); width:60px; height: 60px; position: absolute; top:-30px; left:-30px;"></div>
            <x-prodigy::icons.arrow-down-right-mini></x-prodigy::icons.arrow-down-right-mini>
        </button>
        <script>
            document.onkeydown = function (e) {
                if (e.keyCode == 27) {
                    window.livewire.emit('openProdigyPanel')
                }
            };
        </script>
    @else
        <button wire:click="closeProdigyPanel"
                style="z-index:9999;position: fixed; top:0; left:28rem;">
            <div class="closer"
                 style="background:#f5f5f5; transform:rotate(45deg); width:60px; height: 60px; position: absolute; top:-30px; left:-30px;"></div>
            <x-prodigy::icons.arrow-down-right-mini style="transform:rotate(180deg);"></x-prodigy::icons.arrow-down-right-mini>
        </button>
    @endif
@endif