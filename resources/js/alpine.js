import Alpine from 'alpinejs'

if (typeof window.Alpine == "undefined") {
    window.Alpine = Alpine
    Alpine.start()
    console.log('started prodigy\'s copy of alpine');
} else {
    console.log('relying on existing alpine');
}
