class Search {
    // 1. describe and create/initiate our object
    constructor() {
        this.openButton = document.querySelector('.search-trigger');
        this.closeButton = document.querySelector('.search-overlay__close');
        this.searchOverlay = document.querySelector('.search-overlay');
        this.searchTerm = document.querySelector('#search-term');
        this.resultsDiv = document.querySelector('#search-overlay__results');
        this.events();
        this.isOverlayOpen = false;
        this.isSpinnerVisible = false;
        this.previousValue;
        this.typingTimer;
    }

    // 2. events
    events() {
        this.openButton.addEventListener('click', this.openOverlay.bind(this));
        this.closeButton.addEventListener('click', this.closeOverlay.bind(this));
        document.addEventListener('keydown', this.keyPressDispatcher.bind(this));
        this.searchTerm.addEventListener('keyup', this.typingLogic.bind(this));
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
        if (e.keyCode === 83 && !this.isOverlayOpen && document.querySelector('input') !== document.activeElement && document.querySelector('textarea') !== document.activeElement) {
            this.openOverlay();
        }
        if (e.keyCode === 27 && this.isOverlayOpen) {
            this.closeOverlay();
        }
    }

    typingLogic() {
        if (this.searchTerm.value != this.previousValue) {
            clearTimeout(this.typingTimer);

            if (this.searchTerm.value) {
                if (!this.isSpinnerVisible) {
                    this.resultsDiv.innerHTML = '<div class="spinner-loader"></div>'
                    this.isSpinnerVisible = true;
                }
                this.typingTimer = setTimeout(this.getResults.bind(this), 2000);
            } else {
                this.resultsDiv.innerHTML = '';
                this.isSpinnerVisible = false;
            }


        }

        this.previousValue = this.searchTerm.value;
    }

    getResults() {
        fetch(`http://localhost:3000/wp-json/wp/v2/posts?search=${this.searchTerm.value}`, {
            method: 'get'
        }).then((response => response.json()))
        .then(data => console.log(data[0]));
    }
}

export default Search;