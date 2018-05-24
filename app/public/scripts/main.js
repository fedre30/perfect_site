// BURGER

const burger = document.querySelector('.header-burger');
const menu = document.querySelector('.header-navList');
const burgerImage = document.querySelector('.header-burger img');

burger.addEventListener('click', function () {

    if (menu.classList.contains('menuOpen')) {
        menu.classList.remove('menuOpen');
        burgerImage.src = 'assets/images/burger.png';
    }
    else {
        menu.classList.add('menuOpen');
        burgerImage.src = 'assets/images/close.png';
    }

});

// MENU FIXED

const heropanel = document.querySelector('.heropanel');
const sectionTop = document.querySelector('.news');

window.addEventListener('scroll', function () {
    if (sectionTop.getBoundingClientRect().top < heropanel.offsetHeight) {
        heropanel.classList.add('active');
    }

    else {
        heropanel.classList.remove('active');
    }
});

// POPUP

const popup = document.querySelector('.popup');
const sectionCarousel = document.querySelector('#voyages');
const sponsors = document.querySelector('#sponsors');

window.addEventListener('scroll', function () {
    if (sectionCarousel.getBoundingClientRect().top < popup.offsetHeight) {
        popup.classList.add('popupOpen');
    }

    else {
        popup.classList.remove('popupOpen');
    }
});

