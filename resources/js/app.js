import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

let homeSwiperLoadPromise = null;
let flatpickrLoadPromise = null;

window.loadFlatpickr = function () {
    if (!flatpickrLoadPromise) {
        flatpickrLoadPromise = Promise.all([
            import('flatpickr'),
            import('flatpickr/dist/flatpickr.min.css'),
        ]).then(([flatpickrModule]) => flatpickrModule.default);
    }

    return flatpickrLoadPromise;
};

