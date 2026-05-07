import Swiper from 'swiper';
import { Thumbs, Navigation, Autoplay } from 'swiper/modules';

// Impor Style Swiper (wajib agar tampilan tidak berantakan)
import 'swiper/css';
import 'swiper/css/autoplay';
import 'swiper/css/thumbs';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', function () {
const swiperThumbs = new Swiper(".thumbSwiper", {
    modules: [Thumbs], // Daftarkan modul di sini
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});

const swiperMain = new Swiper(".mainSwiper", {
    modules: [Thumbs, Navigation,Autoplay],
    spaceBetween: 10,
        autoplay: {
        delay: 3000, // Gambar berpindah setiap 3 detik
        disableOnInteraction: false, // Tetap autoplay meskipun user mengklik/swipe manual
    },
    thumbs: {
        swiper: swiperThumbs,
    },
});
});