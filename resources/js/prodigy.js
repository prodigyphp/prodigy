// import './bootstrap';

// import Alpine from 'alpinejs'
//
// if(!window.Alpine instanceof Alpine) {
//     window.Alpine = Alpine
//     Alpine.start()
// }


// import Sortable  from '@shopify/draggable';

// require('@shopify/draggable')

// window.sortable = require('@shopify/draggable/lib/sortable');



startDraggingLink = function(event, element, link_id) {
    console.log(element);
    console.log(event);
    showDropzone();
    // element.classList.add('hi');
    element.setAttribute('draggable', 'true');
    // event.dataTransfer.setData('text/plain', link_id);

}
stopDraggingLink = function(element) {
    element.setAttribute('draggable', 'false');
    console.log('cant drag wrapper');
    hideDropzone();
}

showDropzone = function () {
    document.querySelectorAll('.prodigy-dropzone').forEach(x => x.classList.add('prodigy-highlight-dropzone'));
}

hideDropzone = function () {
    document.querySelectorAll('.prodigy-dropzone').forEach(x => x.classList.remove('prodigy-highlight-dropzone'));
}

deleteLink = function (id) {
    console.log(id);
    const response = confirm("Permanently delete?");

    if (response) {
        Livewire.emit('deleteLink', id);
    }
}

deletePage = function (id) {
    console.log(id);
    const response = confirm("Permanently delete?");

    if (response) {
        Livewire.emit('deletePage', id);
    }
}