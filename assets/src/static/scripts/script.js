import Swiper, { Navigation, Pagination }  from "swiper";


let swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    modules: [Navigation, Pagination],
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },

    // Navigation arrows
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    observer: true,
    observeParents: true
});