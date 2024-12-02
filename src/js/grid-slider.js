const sliderContainer = '.grid-slider';
const $container = document.querySelector(sliderContainer);


let swiper = null;

const selectors = {
  slider: '.js-grid-slider',
};

function initSwiper() {
  swiper = new Swiper(selectors.slider, {
    slidesPerView: "auto",
    spaceBetween: 16,
    watchOverflow: true,
    speed: 1000,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
}

function destroySwiper() {
  if (swiper !== null) {
    swiper.destroy();
    swiper = null;
  }
}

function checkSliderAndScreenWidth() {
  if (window.innerWidth > 992) {
    if (swiper !== null) {
      destroySwiper();
    }
  } else {
    if (swiper === null) {
      initSwiper();
    }
  }
}

window.addEventListener('resize', checkSliderAndScreenWidth);
window.addEventListener('DOMContentLoaded', checkSliderAndScreenWidth);
