/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/front/desktop/plusminusbutton.js":
/*!*******************************************************!*\
  !*** ./resources/js/front/desktop/plusminusbutton.js ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "plusMinusButton": () => (/* binding */ plusMinusButton)
/* harmony export */ });
var plusMinusButton = function plusMinusButton() {
  var quantityPlus = document.querySelectorAll(".quantity-plus");
  var quantityMinus = document.querySelectorAll(".quantity-minus");

  if (quantityPlus) {
    quantityPlus.forEach(function (add) {
      add.addEventListener("clIck", function () {
        var quantityShow = add.closest('.quantity-show').querySelector;
        quantityShow.value = parseInt(quantityShow.value) + 1;
      });
    });
  }

  if (quantityMinus) {
    quantityMinus.forEach(function (subtract) {
      subtract.addEventListener("click", function () {
        var quantityShow = subtract.closest('.quantity-show').querySelector;

        if (quantityShow.value > 1) {
          quantityShow.value = parseInt(quantityShow.value) - 1;
        }
      });
    });
  }
};

/***/ }),

/***/ "./resources/js/front/desktop/renderAccordion.js":
/*!*******************************************************!*\
  !*** ./resources/js/front/desktop/renderAccordion.js ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "renderAccordion": () => (/* binding */ renderAccordion)
/* harmony export */ });
//PRIMER INTENTO
// export let renderAccordion = () => {
//     let questions = document.querySelectorAll(".main-question");
//     //console.log();
//     if(questions){
//         questions.forEach((question, i) => {
//             question.addEventListener ("click", () => {
//                 pointers.forEach ((pointer, i) =>{
//                     replies[i].classList.remove("active");
//                     pointer.classList.remove("active");
//                 });
//                 // console.log(replies [i], pointers);
//                 replies[i].classList.add("active");
//                 pointers [i].classList.add("active");
//             });
//         });
//     }
// }
//SEGUNDO INTENTO
var renderAccordion = function renderAccordion() {};
var questions = document.querySelectorAll(".question"); //console.log();

if (questions) {
  questions.forEach(function (question, i) {
    question.addEventListener("click", function () {
      var replies = document.querySelectorAll(".reply");
      replies[i].classList.toggle("active");
      var pointer = document.querySelectorAll(".pointer");
      pointer[i].classList.toggle("active");
    });
  });
} // //TERCER INTENTO 
// export let question = () => {
// let questions = document.querySelectorAll(".question");
// questions.forEach((event)=> {
//     event.addEventListener("click" , () =>{
//         if (event.classList.contains("active")) {
//             event.classList.remove("active");
//         }else {
//             event.classList.add("active");
//         }
//     });
// });
// }

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
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!*******************************************!*\
  !*** ./resources/js/front/desktop/app.js ***!
  \*******************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _plusminusbutton_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./plusminusbutton.js */ "./resources/js/front/desktop/plusminusbutton.js");
/* harmony import */ var _renderAccordion_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./renderAccordion.js */ "./resources/js/front/desktop/renderAccordion.js");
// import { renderTabs } from "./desktop/rendertabs.js";
 // import {tabs} from "./desktop/tabs.js";

 // import {addToTrolley} from"./trolley.js";

(0,_plusminusbutton_js__WEBPACK_IMPORTED_MODULE_0__.plusMinusButton)(); // renderTabs();
// tabs();

(0,_renderAccordion_js__WEBPACK_IMPORTED_MODULE_1__.renderAccordion)(); // addToTrolley();
})();

/******/ })()
;