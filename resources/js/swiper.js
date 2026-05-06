import Swiper from 'swiper';
import { Navigation, Pagination, Thumbs, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/thumbs';

document.addEventListener('DOMContentLoaded', function () {
  var thumbSwiper = new Swiper(".mySwiper", {
    spaceBetween: 12,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });

  var mainSwiper = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    thumbs: {
      swiper: thumbSwiper,
    },
  });
});