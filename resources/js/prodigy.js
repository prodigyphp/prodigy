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

deleteConnection = function (id, type) {
    console.log(id, type);
    const response = confirm("Permanently delete?");

    if (response) {
        Livewire.emit('deleteConnection', id, type);
    }
}