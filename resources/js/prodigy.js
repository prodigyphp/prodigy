// import './bootstrap';

// import Alpine from 'alpinejs'
//
// if(!window.Alpine instanceof Alpine) {
//     window.Alpine = Alpine
//     Alpine.start()
// }


require('@shopify/draggable')

showDropzone = function () {
    document.querySelectorAll('.prodigy-dropzone').forEach(x => x.classList.add('prodigy-highlight-dropzone'));
}

hideDropzone = function () {
    document.querySelectorAll('.prodigy-dropzone').forEach(x => x.classList.remove('prodigy-highlight-dropzone'));
}

deleteBlock = function (id) {
    const response = confirm("Permanently delete?");

    if (response) {
        Livewire.emit('deleteBlock', id);
    }
}