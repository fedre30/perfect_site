const heropanel = document.querySelector('.heropanel');
const sectionTop = document.querySelector('.top');

window.addEventListener('scroll', function () {
    if(sectionTop.getBoundingClientRect().top < heropanel.offsetHeight){
        heropanel.classList.add('active');
    }

    else{
        heropanel.classList.remove('active');
    }
});

