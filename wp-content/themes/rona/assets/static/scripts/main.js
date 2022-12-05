window.addEventListener('DOMContentLoaded', () => {
    const sliders = () => {
    // Home Screen Slider
    new Swiper(".intro-swiper", {
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },

        effect: 'fade',
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
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
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
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

    const oldPrice = () => {
        // Get a list of all old prices
        const oldPriceList = document.querySelectorAll('.furniture__old');

        // If there is no old price, the block will have not display 
        oldPriceList.forEach(el => {
            if(el.innerHTML === '') el.style.display = 'none'
        })  
    }

    const heart = () => {
        // Get all the hearts
        const hearts = document.querySelectorAll('.furniture__heart');

        // When click on the heart , it becomes active.
        hearts.forEach(el => {
            el.addEventListener('click', () => {
                if(el.classList.contains('active')){
                    el.classList.remove('active')
                } else {
                    el.classList.add('active');
                }
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
        // Getting all input
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
        oldPrice();
        heart();
    }catch{}

    try{
        formContacts();
    } catch{}
});