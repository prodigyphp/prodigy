<div>
        <input type="file" wire:model="photo">
        @error('photo') <p class="error pro-text-red-500">{{ $message }}</p> @enderror

</div>