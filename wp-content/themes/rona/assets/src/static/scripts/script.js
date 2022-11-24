import Swiper, { Navigation, Pagination }  from "swiper";

window.addEventListener('DOMContentLoaded', () => {
    new Swiper(".intro-swiper", {
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
    
    
    new Swiper(".furniture__swiper", {
        slidesPerView: 4,
        modules: [Navigation, Pagination],
        // If we need pagination
        pagination: {
            el: '.swiper-pagination-furniture',
            type: 'bullets',
            clickable: true
        },
    
        // Navigation arrows
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        observer: true,
        observeParents: true,
    
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
            960: {
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

    /* Map */
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        var mapOptions = {
            zoom: 11,

            center: new google.maps.LatLng(40.6700, -73.9400), // New York

            styles: [{"featureType":"all","elementType":"labels.text","stylers":[{"color":"#878787"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f9f5ed"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"color":"#f5f5f5"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#c9c9c9"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#aee0f4"}]}]
        };

        var mapElement = document.querySelector('.connection__map');

        var map = new google.maps.Map(mapElement, mapOptions);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            title: 'Snazzy!'
        });
    }
});