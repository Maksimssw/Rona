/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "../src/static/scripts/script.js":
/*!***************************************!*\
  !*** ../src/static/scripts/script.js ***!
  \***************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\nwindow.addEventListener('DOMContentLoaded', () => {\r\n    new Swiper(\".intro-swiper\", {\r\n        slidesPerView: 1,\r\n        // If we need pagination\r\n        pagination: {\r\n            el: '.swiper-pagination',\r\n            type: 'bullets',\r\n            clickable: true\r\n        },\r\n    \r\n        // Navigation arrows\r\n        navigation: {\r\n        nextEl: '.swiper-button-next',\r\n        prevEl: '.swiper-button-prev',\r\n        },\r\n    });\r\n    \r\n    \r\n    new Swiper(\".furniture__swiper\", {\r\n        slidesPerView: 4,\r\n        // If we need pagination\r\n        pagination: {\r\n            el: '.swiper-pagination-furniture',\r\n            type: 'bullets',\r\n            clickable: true\r\n        },\r\n    \r\n        // Navigation arrows\r\n        navigation: {\r\n        nextEl: '.swiper-button-next',\r\n        prevEl: '.swiper-button-prev',\r\n        },\r\n\r\n        spaceBetween: 16,\r\n        \r\n        breakpoints: {\r\n            0: {\r\n                slidesPerView: 1,\r\n            },\r\n            480: {\r\n                slidesPerView: 2,\r\n            },\r\n            640: {\r\n                slidesPerView: 3,\r\n            },\r\n            960: {\r\n                slidesPerView: 3,\r\n            },\r\n            1024: {\r\n                slidesPerView: 3,\r\n            },\r\n            1440: {\r\n                slidesPerView: 4,\r\n            }\r\n        }\r\n    });\r\n\r\n    /* Map */\r\n    google.maps.event.addDomListener(window, 'load', init);\r\n\r\n    function init() {\r\n        var mapOptions = {\r\n            zoom: 11,\r\n\r\n            center: new google.maps.LatLng(40.6700, -73.9400), // New York\r\n\r\n            styles: [{\"featureType\":\"all\",\"elementType\":\"labels.text\",\"stylers\":[{\"color\":\"#878787\"}]},{\"featureType\":\"all\",\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"landscape\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#f9f5ed\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#f5f5f5\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#c9c9c9\"}]},{\"featureType\":\"water\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#aee0f4\"}]}]\r\n        };\r\n\r\n        var mapElement = document.querySelector('.connection__map');\r\n\r\n        var map = new google.maps.Map(mapElement, mapOptions);\r\n\r\n        var marker = new google.maps.Marker({\r\n            position: new google.maps.LatLng(40.6700, -73.9400),\r\n            map: map,\r\n            title: 'Snazzy!'\r\n        });\r\n    }\r\n});\n\n//# sourceURL=webpack:///../src/static/scripts/script.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["../src/static/scripts/script.js"](0, __webpack_exports__, __webpack_require__);
/******/ 	
/******/ })()
;