import { Swiper, Pagination, Autoplay } from 'swiper';

export default (elem, args) => {
  Swiper.use([Pagination, Autoplay]);

  new Swiper(elem, {
    speed: 800,
    autoplay: {
      delay: 4000,
    },
    loop: true,
    spaceBetween: 20,
    breakpoints: {
      720: {
        slidesPerView: 1.3
      }
    },
    pagination: {
      el: ".hero-slider__images-pagination",
      clickable: true,
    },
  });
}