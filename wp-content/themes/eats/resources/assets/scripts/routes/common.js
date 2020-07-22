export default {
  init() {
    // JavaScript to be fired on all pages

    const searchValue = document.querySelector('.search-form')[0];
    searchValue.placeholder = 'e.g. delicious sandwiches';

    const hamburgerToggleBtn = document.querySelector('.navbar-toggler');
    const searchToggleBtn = document.querySelector('.search-toggle-btn');
    const searchToggleDropdown = document.querySelector('.search-form-dropdown-container');
    const searchToggleBtnImg = document.querySelector('.search-toggle-btn-img');
    const searchImg = window.location.origin + '/wp-content/themes/eats/resources/assets/icons/search.svg';
    const closeImg = window.location.origin + '/wp-content/themes/eats/resources/assets/icons/close.svg';

    hamburgerToggleBtn.addEventListener('click', handleClickHamburgerMenu);

    function handleClickHamburgerMenu() {
      hamburgerToggleBtn.classList.toggle('is-active');
    }

    searchToggleBtn.addEventListener('click', handleSearchToggle);

    function handleSearchToggle(event) {
      event.preventDefault();
      
      searchToggleDropdown.classList.toggle('show');
      searchToggleBtn.classList.toggle('active');
  
      searchToggleBtnImg.src = (searchToggleBtnImg.src === searchImg) ? closeImg : searchImg;      
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
