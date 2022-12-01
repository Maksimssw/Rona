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

/***/ "../src/static/scripts/modules/formContacts.js":
/*!*****************************************************!*\
  !*** ../src/static/scripts/modules/formContacts.js ***!
  \*****************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nconst formContacts = () => {\r\n    // Getting all input\r\n    const inputs = document.querySelectorAll('.form__input .input');\r\n\r\n    // Busting each input\r\n    inputs.forEach(input => {\r\n        input.addEventListener('input', () => {\r\n            // getting the value and wrapper\r\n            const value = input.value;\r\n            let wrapper = input.closest('.form__input');\r\n\r\n            // Changing Styles\r\n            if(value !== ''){\r\n                wrapper.classList.add('active');\r\n            } else {\r\n                wrapper.classList.remove('active');\r\n            }\r\n        });\r\n    })\r\n}\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (formContacts);\n\n//# sourceURL=webpack:///../src/static/scripts/modules/formContacts.js?");

/***/ }),

/***/ "../src/static/scripts/modules/heart.js":
/*!**********************************************!*\
  !*** ../src/static/scripts/modules/heart.js ***!
  \**********************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nconst heart = () =>{\r\n    // Get all the hearts\r\n    const hearts = document.querySelectorAll('.furniture__heart');\r\n\r\n    // When pressing on the heart , it becomes active.\r\n    hearts.forEach(el => {\r\n        el.addEventListener('click', () => {\r\n            if(el.classList.contains('active')){\r\n                el.classList.remove('active')\r\n            } else {\r\n                el.classList.add('active');\r\n            }\r\n        });\r\n    })\r\n}\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (heart);\n\n//# sourceURL=webpack:///../src/static/scripts/modules/heart.js?");

/***/ }),

/***/ "../src/static/scripts/modules/map.js":
/*!********************************************!*\
  !*** ../src/static/scripts/modules/map.js ***!
  \********************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nconst map = () => {\r\n\r\n    let center = [45.849355106043596,40.13087151421415]\r\n\r\n    function init(){\r\n        let map = new ymaps.Map('map', {\r\n            center: center,\r\n            zoom: 17 \r\n        });\r\n\r\n        let placemark = new ymaps.Placemark(center, {}, {\r\n         \r\n        });\r\n\r\n        map.controls.remove('geolocationControl'); \r\n        map.controls.remove('searchControl');\r\n        map.controls.remove('trafficControl'); \r\n        map.controls.remove('typeSelector');\r\n        map.controls.remove('fullscreenControl'); \r\n        map.controls.remove('zoomControl'); \r\n        map.controls.remove('rulerControl'); \r\n        map.behaviors.disable(['scrollZoom']); \r\n        map.behaviors.disable('scrollZoom'); // — это отключает зум колёсиком мышки, всё ок.\r\n        map.behaviors.disable('multiTouch'); // — это отключает зум щипком, не очень нужно. \r\n        map.behaviors.disable('drag'); // —\r\n        map.geoObjects.add(placemark);\r\n    }\r\n\r\n    ymaps.ready(init);\r\n}\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (map);\n\n//# sourceURL=webpack:///../src/static/scripts/modules/map.js?");

/***/ }),

/***/ "../src/static/scripts/modules/oldPrice.js":
/*!*************************************************!*\
  !*** ../src/static/scripts/modules/oldPrice.js ***!
  \*************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nconst oldPrice = () => {\r\n    // Get a list of all old prices\r\n    const oldPriceList = document.querySelectorAll('.furniture__old');\r\n\r\n    // If there is no old price, the block will have not display \r\n    oldPriceList.forEach(el => {\r\n        if(el.innerHTML === '') el.style.display = 'none'\r\n    })\r\n}\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (oldPrice);\n\n//# sourceURL=webpack:///../src/static/scripts/modules/oldPrice.js?");

/***/ }),

/***/ "../src/static/scripts/modules/sliders.js":
/*!************************************************!*\
  !*** ../src/static/scripts/modules/sliders.js ***!
  \************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nconst sliders = () => {\r\n\r\n    // Home Screen Slider\r\n    new Swiper(\".intro-swiper\", {\r\n        slidesPerView: 1,\r\n        pagination: {\r\n            el: '.swiper-pagination',\r\n            type: 'bullets',\r\n            clickable: true\r\n        },\r\n\r\n        navigation: {\r\n        nextEl: '.swiper-button-next',\r\n        prevEl: '.swiper-button-prev',\r\n        },\r\n    });\r\n    \r\n    // Slider with popular product\r\n    new Swiper(\".furniture__swiper\", {\r\n        slidesPerView: 4,\r\n        pagination: {\r\n            el: '.swiper-pagination-furniture',\r\n            type: 'bullets',\r\n            clickable: true\r\n        },\r\n    \r\n        navigation: {\r\n        nextEl: '.swiper-button-next',\r\n        prevEl: '.swiper-button-prev',\r\n        },\r\n\r\n        spaceBetween: 16,\r\n        \r\n        breakpoints: {\r\n            0: {\r\n                slidesPerView: 1,\r\n            },\r\n            480: {\r\n                slidesPerView: 2,\r\n            },\r\n            640: {\r\n                slidesPerView: 3,\r\n            },\r\n            961: {\r\n                slidesPerView: 4,\r\n            },\r\n            1024: {\r\n                slidesPerView: 3,\r\n            },\r\n            1440: {\r\n                slidesPerView: 4,\r\n            }\r\n        }\r\n    });\r\n}\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (sliders);\n\n//# sourceURL=webpack:///../src/static/scripts/modules/sliders.js?");

/***/ }),

/***/ "../src/static/scripts/script.js":
/*!***************************************!*\
  !*** ../src/static/scripts/script.js ***!
  \***************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_sliders_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/sliders.js */ \"../src/static/scripts/modules/sliders.js\");\n/* harmony import */ var _modules_oldPrice_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/oldPrice.js */ \"../src/static/scripts/modules/oldPrice.js\");\n/* harmony import */ var _modules_heart_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/heart.js */ \"../src/static/scripts/modules/heart.js\");\n/* harmony import */ var _modules_formContacts_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/formContacts.js */ \"../src/static/scripts/modules/formContacts.js\");\n/* harmony import */ var _modules_map_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./modules/map.js */ \"../src/static/scripts/modules/map.js\");\n\r\n\r\n\r\n\r\n\r\n\r\nwindow.addEventListener('DOMContentLoaded', () => {\r\n\r\n    try{\r\n        (0,_modules_sliders_js__WEBPACK_IMPORTED_MODULE_0__[\"default\"])();\r\n        (0,_modules_oldPrice_js__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\r\n        (0,_modules_heart_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])();\r\n    }catch{}\r\n    \r\n    (0,_modules_map_js__WEBPACK_IMPORTED_MODULE_4__[\"default\"])();\r\n\r\n    try{\r\n        (0,_modules_formContacts_js__WEBPACK_IMPORTED_MODULE_3__[\"default\"])();\r\n    } catch{}\r\n\r\n    /* Map */\r\n    /* google.maps.event.addDomListener(window, 'load', init);\r\n\r\n    function init() {\r\n        var mapOptions = {\r\n            zoom: 11,\r\n\r\n            center: new google.maps.LatLng(40.6700, -73.9400), // New York\r\n\r\n            styles: [{\"featureType\":\"all\",\"elementType\":\"labels.text\",\"stylers\":[{\"color\":\"#878787\"}]},{\"featureType\":\"all\",\"elementType\":\"labels.text.stroke\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"landscape\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#f9f5ed\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#f5f5f5\"}]},{\"featureType\":\"road.highway\",\"elementType\":\"geometry.stroke\",\"stylers\":[{\"color\":\"#c9c9c9\"}]},{\"featureType\":\"water\",\"elementType\":\"all\",\"stylers\":[{\"color\":\"#aee0f4\"}]}]\r\n        };\r\n\r\n        var mapElement = document.querySelector('.connection__map');\r\n\r\n        var map = new google.maps.Map(mapElement, mapOptions);\r\n\r\n        var marker = new google.maps.Marker({\r\n            position: new google.maps.LatLng(40.6700, -73.9400),\r\n            map: map,\r\n            title: 'Snazzy!'\r\n        });\r\n    } */\r\n});\n\n//# sourceURL=webpack:///../src/static/scripts/script.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
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
/******/ 	__webpack_require__("../src/static/scripts/script.js");
/******/ 	__webpack_require__("../src/static/scripts/modules/formContacts.js");
/******/ 	__webpack_require__("../src/static/scripts/modules/heart.js");
/******/ 	__webpack_require__("../src/static/scripts/modules/map.js");
/******/ 	__webpack_require__("../src/static/scripts/modules/oldPrice.js");
/******/ 	var __webpack_exports__ = __webpack_require__("../src/static/scripts/modules/sliders.js");
/******/ 	
/******/ })()
;