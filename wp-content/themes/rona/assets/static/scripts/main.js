window.addEventListener('DOMContentLoaded', () => {
    const sliders = () => {
    // Home Screen Slider
    new Swiper(".hero-swiper", {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        effect: 'fade',
        navigation: {
        nextEl: '.hero__button_right',
        prevEl: '.hero__button_left',
        },
    });
    
    // Slider with popular product
    new Swiper(".furniture__swiper", {
        slidesPerView: 4,
        pagination: {
            el: '.swiper-pagination-furniture',
            type: 'bullets',
            clickable: true
        },
        navigation: {
        nextEl: '.slider-button-next',
        prevEl: '.slider-button-prev',
        },
        spaceBetween: 16,
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            640: {
                slidesPerView: 3,
            },
            961: {
                slidesPerView: 4,
            },
            1024: {
                slidesPerView: 3,
            },
            1440: {
                slidesPerView: 4,
            }
        }
    }); 
    }

    const heart = () => {
        const hearts = document.querySelectorAll('.card__heart');

        // When click on the heart , it becomes active.
        hearts.forEach(el => {
            el.addEventListener('click', (e) => {
                e.preventDefault();
                el.classList.toggle('active')
            });
        })
    }

    /* Map */
    let center = [45.849355106043596,40.13087151421415]

    function init(){
        let map = new ymaps.Map('map', {
            center: center,
            zoom: 17 
        });

        let placemark = new ymaps.Placemark(center, {}, {
         
        });

        map.controls.remove('geolocationControl'); 
        map.controls.remove('searchControl');
        map.controls.remove('trafficControl'); 
        map.controls.remove('typeSelector');
        map.controls.remove('fullscreenControl'); 
        map.controls.remove('zoomControl'); 
        map.controls.remove('rulerControl'); 
        map.behaviors.disable(['scrollZoom']); 
        map.behaviors.disable('scrollZoom'); // — это отключает зум колёсиком мышки, всё ок.
        map.behaviors.disable('multiTouch'); // — это отключает зум щипком, не очень нужно. 
        map.behaviors.disable('drag'); // —
        map.geoObjects.add(placemark);
    }

    ymaps.ready(init);

    const formContacts = () => {
        const inputs = document.querySelectorAll('.form__input .input');

        // Busting each input
        inputs.forEach(input => {
            input.addEventListener('input', () => {
                // getting the value and wrapper
                const value = input.value;
                let wrapper = input.closest('.form__input');

                // Changing Styles
                if(value !== ''){
                    wrapper.classList.add('active');
                } else {
                    wrapper.classList.remove('active');
                }
            });
        }) 
    }

    try{
        sliders();
        heart();
    }catch{}

    try{
        formContacts();
    } catch{}
});