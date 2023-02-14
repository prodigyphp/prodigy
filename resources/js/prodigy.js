// import './bootstrap';

import Alpine from 'alpinejs'
if(!window.Alpine instanceof Alpine) {
    window.Alpine = Alpine
    Alpine.start()
}

require('@shopify/draggable')