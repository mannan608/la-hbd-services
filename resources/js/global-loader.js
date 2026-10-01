(function () {
    'use strict';

    const loader = document.getElementById('global-loader');

    if (!loader) {
        return;
    }

    let loading = false;

    function showLoader() {
        if (loading) {
            return;
        }

        loading = true;

        loader.classList.remove('hidden');
        loader.classList.add('flex');
        loader.setAttribute('aria-hidden', 'false');

        document.body.classList.add('overflow-hidden');
    }

    function hideLoader() {
        loading = false;

        loader.classList.add('hidden');
        loader.classList.remove('flex');
        loader.setAttribute('aria-hidden', 'true');

        document.body.classList.remove('overflow-hidden');
    }

    // Expose globally
    window.showGlobalLoader = showLoader;
    window.hideGlobalLoader = hideLoader;


    /*
    |--------------------------------------------------------------------------
    | Form Submit
    |--------------------------------------------------------------------------
    */

    document.addEventListener('submit', function (event) {

        const form = event.target;

        if (!(form instanceof HTMLFormElement)) {
            return;
        }

        // Ignore forms that explicitly disable the loader
        if (form.dataset.loader === 'false') {
            return;
        }

        // Ignore forms that open in another tab/window
        if (form.target && form.target !== '_self') {
            return;
        }

        showLoader();

    });


    /*
    |--------------------------------------------------------------------------
    | Link Navigation
    |--------------------------------------------------------------------------
    */

    document.addEventListener('click', function (event) {

        const link = event.target.closest('a');

        if (!link) {
            return;
        }

        // Ignore modified clicks
        if (
            event.ctrlKey ||
            event.shiftKey ||
            event.altKey ||
            event.metaKey
        ) {
            return;
        }

        // Ignore links with explicit opt-out
        if (link.dataset.loader === 'false') {
            return;
        }

        // Ignore empty links
        const href = link.getAttribute('href');

        if (!href || href === '#') {
            return;
        }

        // Ignore javascript links
        if (href.startsWith('javascript:')) {
            return;
        }

        // Ignore downloads
        if (link.hasAttribute('download')) {
            return;
        }

        // Ignore target="_blank"
        if (link.target && link.target !== '_self') {
            return;
        }

        // Ignore external URLs
        try {
            const url = new URL(href, window.location.origin);

            if (url.origin !== window.location.origin) {
                return;
            }

            // Same page hash
            if (
                url.pathname === window.location.pathname &&
                url.search === window.location.search &&
                url.hash
            ) {
                return;
            }

        } catch (error) {
            return;
        }

        showLoader();

    });


    /*
    |--------------------------------------------------------------------------
    | Browser Back / Forward
    |--------------------------------------------------------------------------
    */

    window.addEventListener('pageshow', function () {
        hideLoader();
    });


    /*
    |--------------------------------------------------------------------------
    | Page Load
    |--------------------------------------------------------------------------
    */

    window.addEventListener('load', function () {
        hideLoader();
    });

})();