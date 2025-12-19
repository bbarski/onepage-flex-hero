// Inicjalizacja Swiper.js
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        navigation: {
            nextEl: '.reviews__navigation span:nth-of-type(2)',
            prevEl: '.reviews__navigation span:nth-of-type(1)',
        },
    });

    const swiperRelated = new Swiper('.swiper-container-related', {
        loop: true,
        navigation: {
            nextEl: '.related__navigation span:nth-of-type(2)',
            prevEl: '.related__navigation span:nth-of-type(1)',
        },
    });
});
