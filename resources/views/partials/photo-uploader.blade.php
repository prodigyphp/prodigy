<div x-data="{
    handleFileDrop(e) {
    console.log(e.dataTransfer.files);
        if (event.dataTransfer.files.length > 0) {
            const file = e.dataTransfer.files[0];
                        @this.upload('photo', file,
                            (uploadedFilename) => {}, () => {}, (event) => {}
                        )
        }
     },
     handleDelete() {
         const response = confirm('Permanently delete?');
        if (response) {
            $wire.call('delete');
        }
    }
}">
    <input type="file" class="pro-hidden" x-ref="photo" wire:model="photo">

    @error('photo') <p class="error pro-text-red-500">{{ $message }}</p> @enderror
    <div class=""
         x-on:dragover.prevent="$el.classList.add('pro-bg-blue-500');"
         x-on:dragleave.prevent="$el.classList.remove('pro-bg-blue-500');"
         x-on:drop.prevent="handleFileDrop($event)">

        @if($preview)
            <img x-on:click="$refs.photo.click();"
                 src="{{ $preview }}" alt="" class="pro-max-w-[50%]"/>

            <p class="pro-text-red-500 pro-mt-2 pro-mb-4 hover:pro-text-red-700 pro-cursor-pointer" x-on:click="handleDelete()">
                {{ _('Delete Image') }}</p>
        @else
            <div x-on:click="$refs.photo.click();"
                 class="pro-aspect-[4/1] pro-border-2 pro-border-gray-200 hover:pro-bg-gray-200 pro-border-dashed pro-flex pro-justify-center pro-items-center pro-w-full pro-rounded-md">
                <p class="pro-cursor-default pro-semibold pro-text-black/50">Drop image or click to upload</p>
            </div>
        @endif
    </div>
</div>