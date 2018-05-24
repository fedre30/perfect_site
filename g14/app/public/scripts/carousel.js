// CAROUSEL

class Carousel{
    constructor (el, slides, delay){
        this.el = el;
        this.slides = slides;
        this.slideIndex = 0;
        this.delay = delay || 3000;
        this.intervalId = 0;

        this.refresh();
    }

    get slideCount(){
        return this.slides.length;
    }

    get currentSlide(){
        return this.slides[this.slideIndex];
    }

    get isPlaying(){
        return this.intervalId != 0;
    }

    next (){
        this.slideIndex++;

        if (this.slideIndex >= this.slideCount){
            this.slideIndex = 0;
        }
        this.refresh();
        this.resetTimer();
    }

    previous(){
        this.slideIndex--;

        if(this.slideIndex < 0){
            this.slideIndex = this.slideCount - 1;
        }
        this.refresh();
        this.resetTimer();
    }

    refresh (){
        this.slides[0].style.marginLeft = `-${100*this.slideIndex}%`;
    }

    play(){
        this.stop();
        const self = this;
        this.intervalId = setInterval( function(){
            self.next();
        }, this.delay)
    }

    playReverse(){
        this.stop();
        const self = this;
        this.intervalId = setInterval( function(){
            self.previous();
        }, this.delay)
    }

    stop(){
        clearInterval(this.intervalId);
        this.intervalId = 0;
    }

    resetTimer(){
        if (this.isPlaying){
            this.play();
        }
    }

}

const carouselEl = document.getElementById("carousel");
const carouselImages = carouselEl.querySelectorAll("div.slide");
const homeCarousel = new Carousel(carouselEl, carouselImages);
const mq = window.matchMedia("(max-width: 600px)");

homeCarousel.play();

carouselEl.querySelector(".previous-btn").addEventListener("click", () => {
    homeCarousel.previous();
});

carouselEl.querySelector(".next-btn").addEventListener("click", () => {
    homeCarousel.next();
});
