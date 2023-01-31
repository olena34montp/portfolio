const BURGERBTN = document.querySelector('.navigation__btn');
const PREVSLIDE = document.querySelector('.realisations-nav__btn--prev');
const NEXTSLIDE = document.querySelector('.realisations-nav__btn--next');
const SLIDES = document.querySelectorAll('.realisations__item');
let curSlide = 0;
let maxSlide = SLIDES.length - 1;

//Burger menu
BURGERBTN.addEventListener('click', function () {
    BURGERBTN.classList.toggle('navigation__btn--close');
});

//Slider
if (NEXTSLIDE) {
    NEXTSLIDE.addEventListener('click', function () {
        if(curSlide == maxSlide) {
            curSlide = -1;
        }
        if (curSlide < maxSlide) {
            curSlide++;
            for (let i = 0; i <= maxSlide; i++) {
                SLIDES[i].style.transform = `translateX(${-100 * curSlide}%)`;
            }
        }
    });
}

if (PREVSLIDE) {
    PREVSLIDE.addEventListener('click', function () {
        if(curSlide == 0) {
            curSlide = 3;
        }
        if (curSlide > 0) {
            curSlide--;
            for (let i = maxSlide; i >= 0; i--) {
                SLIDES[i].style.transform = `translateX(${-100 * curSlide}%)`;
            }
        }
    });
}