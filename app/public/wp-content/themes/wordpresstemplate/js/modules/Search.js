class Search {
    // 1. describe and create/initiate our object
    constructor() {
        this.openButton = document.querySelector('.search-trigger');
        this.closeButton = document.querySelector('.search-overlay__close');
        this.searchOverlay = document.querySelector('.search-overlay');
        this.events();
        this.isOverlayOpen = false;
    }

    // 2. events
    events() {
        this.openButton.addEventListener('click', this.openOverlay.bind(this));
        this.closeButton.addEventListener('click', this.closeOverlay.bind(this));
        document.addEventListener('keydown', this.keyPressDispatcher.bind(this));
    }

    // 3. methods (function, action...)
    openOverlay() {
        this.searchOverlay.classList.add('search-overlay--active');
        document.querySelector('body').classList.add('body-no-scroll');
        this.isOverlayOpen = true;
    }

    closeOverlay() {
        this.searchOverlay.classList.remove('search-overlay--active');
        document.querySelector('body').classList.remove('body-no-scroll');
        this.isOverlayOpen = false;
    }

    keyPressDispatcher(e) {
        if (e.keyCode === 83 && !this.isOverlayOpen) {
            this.openOverlay();
        }
        if (e.keyCode === 27 && this.isOverlayOpen) {
            this.closeOverlay();
        }
    }
}

export default Search;