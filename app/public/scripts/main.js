// BURGER

const burger = document.querySelector('.header-burger');
const menu = document.querySelector('.header-navList');
const burgerImage = document.querySelector('.header-burger img');
const sectionNews = document.querySelector('.news');

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

window.addEventListener('scroll', function () {
   if(sectionNews.getBoundingClientRect().top < burger.offsetHeight) {
       burgerImage.src = 'assets/images/burger.png'
   }
   else{
       burgerImage.src = 'assets/images/burger-white.png'
   }
});

// MENU FIXED

const heropanel = document.querySelector('.heropanel');

window.addEventListener('scroll', function () {
    if (sectionNews.getBoundingClientRect().top < heropanel.offsetHeight) {
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
    if (sectionCarousel.getBoundingClientRect().top < popup.offsetHeight && sponsors.getBoundingClientRect().top > popup.offsetHeight) {
        popup.classList.add('popupOpen');
    }

    else {
        popup.classList.remove('popupOpen');
    }
});

// SMOOTH SCROLL


const sectionTop = document.querySelector('#top');
const topCall = document.querySelector('.top-call');
const sectionVoyages = document.querySelector('#voyages');
const voyagesCall = document.querySelector('.voyages-call');
const magazineCall = document.querySelector('.magazine-call');
const sectionMagazine = document.querySelector('#magazine');

function animate(time) {
    requestAnimationFrame(animate);
    TWEEN.update(time);
}

requestAnimationFrame(animate);

function tweenAnimation (section){
    const position = {y: window.scrollY};
    const tween = new TWEEN.Tween(position)
        .to({y: section.getBoundingClientRect().top})
        .easing(TWEEN.Easing.Quadratic.Out)
        .onUpdate(function () {
            console.log('coucou');
            window.scroll(window.scrollX, position.y);
        })
        .start();
}

topCall.addEventListener('click', function () {
    tweenAnimation(sectionTop);
});

voyagesCall.addEventListener('click', function () {
    tweenAnimation(sectionVoyages);
});

magazineCall.addEventListener('click', function () {
    tweenAnimation(sectionMagazine);
});



