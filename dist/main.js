/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/admin.js":
/*!*************************!*\
  !*** ./src/js/admin.js ***!
  \*************************/
/***/ (() => {



/***/ }),

/***/ "./src/js/utils.js":
/*!*************************!*\
  !*** ./src/js/utils.js ***!
  \*************************/
/***/ ((module) => {

/*
 *  function_run used for running
 */
var function_run = function function_run(input) {
  console.log(input);
  var layout = input["id"] + "";

  if (input['layout'] !== undefined && input["layout"] !== input["id"] + "_default") {
    layout = input["layout"];
  } //end if


  console.log('layout = ', layout);
  var fn = funcs[layout];
  if (typeof fn === "function") return fn(input);
  var element = document.createElement('p');
  element.innerHTML = "JavaScript Building. Sass Building. Testing with [".concat(input.id, "]. Your custom layout does not exist or configured incorrectly");
  return element;
};

module.exports = function_run; //new fucntion is here
//start calendar

/*
$(document).ready(function(){
	//var disabledDays = ["2022-7-28"];
	//var tips = ['some description1'];
	$('#mdp').multiDatesPicker({
	//maxPicks: 5,
	
	altField: '#mdp-value',
	dateFormat: "dd-mm-yy",
	minDate: 0,
	//maxDate: "+12M",
	//addDisabledDates: ['25-09-12' , '26-09-12' , '27-09-12'],
	beforeShowDay: $.datepicker.noWeekends,
	beforeShowDay: function (date) {
        var m = String(date.getMonth() + 1).padStart(2, '0');
            d = String(date.getDate()).padStart(2, '0');
            y = date.getFullYear();
			daysInMonth = new Date(y, m, 0).getDate();
			classname_new = y + "" + m + "" + d;
        for (var i = 0; i < daysInMonth; i++) {
            //if ($.inArray(y + '-' + (m + 1) + '-' + d, disabledDays) != -1) {
            //    return [true, 'highlight ' + classname_new ,''];
            //}
			return [true, "class_" + classname_new ,''];
        }
        return [true];
    },
	mode: 'daysRange',
	autoselectRange: [0,10],
	onSelect: function(dateText) {
        console.log("Selected date: " + dateText + "; input's current value: " + this.value);
		var count = $(this).val().split(',').length;
		$("#toptitle").text(count + ' selected');
		
    }
	});



	


	$(".answer").hide();
$(".coupon_question").click(function() {
    if($(this).is(":checked")) {
        $(".answer").show(500);
    } else {
        
		$('custom_rice_white').val('');
		$('custom_rice_brown').val('');
		$(".answer").hide(500);
    }
});

*/
//}); //end document ready

/***/ }),

/***/ "./src/css/main.scss":
/*!***************************!*\
  !*** ./src/css/main.scss ***!
  \***************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


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
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_main__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/main */ "./src/css/main.scss");


__webpack_require__(/*! ./admin.js */ "./src/js/admin.js");

var function_run = __webpack_require__(/*! ./utils.js */ "./src/js/utils.js");
})();

/******/ })()
;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoibWFpbi5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBRUEsSUFBTUEsWUFBWSxHQUFHLFNBQWZBLFlBQWUsQ0FBQ0MsS0FBRCxFQUFXO0VBQzlCQyxPQUFPLENBQUNDLEdBQVIsQ0FBWUYsS0FBWjtFQUNELElBQUlHLE1BQU0sR0FBR0gsS0FBSyxDQUFDLElBQUQsQ0FBTCxHQUFZLEVBQXpCOztFQUNBLElBQ0NBLEtBQUssQ0FBQyxRQUFELENBQUwsS0FBb0JJLFNBQXBCLElBRUFKLEtBQUssQ0FBQyxRQUFELENBQUwsS0FBb0JBLEtBQUssQ0FBQyxJQUFELENBQUwsR0FBWSxVQUhqQyxFQUlDO0lBQ0FHLE1BQU0sR0FBR0gsS0FBSyxDQUFDLFFBQUQsQ0FBZDtFQUNBLENBVDhCLENBUzlCOzs7RUFDREMsT0FBTyxDQUFDQyxHQUFSLENBQVksV0FBWixFQUF5QkMsTUFBekI7RUFDQSxJQUFJRSxFQUFFLEdBQUdDLEtBQUssQ0FBQ0gsTUFBRCxDQUFkO0VBQ0EsSUFBSSxPQUFPRSxFQUFQLEtBQWMsVUFBbEIsRUFBOEIsT0FBT0EsRUFBRSxDQUFDTCxLQUFELENBQVQ7RUFFOUIsSUFBTU8sT0FBTyxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsR0FBdkIsQ0FBaEI7RUFDQUYsT0FBTyxDQUFDRyxTQUFSLCtEQUF5RVYsS0FBSyxDQUFDVyxFQUEvRTtFQUNBLE9BQU9KLE9BQVA7QUFDQSxDQWpCRDs7QUFtQkFLLE1BQU0sQ0FBQ0MsT0FBUCxHQUFpQmQsWUFBakIsRUFHQTtBQUdBOztBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBTUE7Ozs7Ozs7Ozs7OztBQzFGQTs7Ozs7OztVQ0FBO1VBQ0E7O1VBRUE7VUFDQTtVQUNBO1VBQ0E7VUFDQTtVQUNBO1VBQ0E7VUFDQTtVQUNBO1VBQ0E7VUFDQTtVQUNBO1VBQ0E7O1VBRUE7VUFDQTs7VUFFQTtVQUNBO1VBQ0E7Ozs7O1dDdEJBO1dBQ0E7V0FDQTtXQUNBLHVEQUF1RCxpQkFBaUI7V0FDeEU7V0FDQSxnREFBZ0QsYUFBYTtXQUM3RDs7Ozs7Ozs7Ozs7OztBQ05BOztBQUVBZ0IsbUJBQU8sQ0FBQyxxQ0FBRCxDQUFQOztBQUNBLElBQU1oQixZQUFZLEdBQUdnQixtQkFBTyxDQUFDLHFDQUFELENBQTVCLEMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly9wbHVnaW5fZGVmYXVsdC8uL3NyYy9qcy91dGlscy5qcyIsIndlYnBhY2s6Ly9wbHVnaW5fZGVmYXVsdC8uL3NyYy9jc3MvbWFpbi5zY3NzP2VmOWIiLCJ3ZWJwYWNrOi8vcGx1Z2luX2RlZmF1bHQvd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vcGx1Z2luX2RlZmF1bHQvd2VicGFjay9ydW50aW1lL21ha2UgbmFtZXNwYWNlIG9iamVjdCIsIndlYnBhY2s6Ly9wbHVnaW5fZGVmYXVsdC8uL3NyYy9qcy9pbmRleC5qcyJdLCJzb3VyY2VzQ29udGVudCI6WyIvKlxuICogIGZ1bmN0aW9uX3J1biB1c2VkIGZvciBydW5uaW5nXG4gKi9cblxuY29uc3QgZnVuY3Rpb25fcnVuID0gKGlucHV0KSA9PiB7XG4gIGNvbnNvbGUubG9nKGlucHV0KTtcblx0bGV0IGxheW91dCA9IGlucHV0W1wiaWRcIl0rXCJcIjtcblx0aWYoXG5cdFx0aW5wdXRbJ2xheW91dCddICE9PSB1bmRlZmluZWRcblx0XHQmJlxuXHRcdGlucHV0W1wibGF5b3V0XCJdICE9PSBpbnB1dFtcImlkXCJdK1wiX2RlZmF1bHRcIlxuXHQpe1xuXHRcdGxheW91dCA9IGlucHV0W1wibGF5b3V0XCJdO1xuXHR9Ly9lbmQgaWZcblx0Y29uc29sZS5sb2coJ2xheW91dCA9ICcsIGxheW91dCk7XG5cdHZhciBmbiA9IGZ1bmNzW2xheW91dF07XG5cdGlmICh0eXBlb2YgZm4gPT09IFwiZnVuY3Rpb25cIikgcmV0dXJuIGZuKGlucHV0KTtcblxuXHRjb25zdCBlbGVtZW50ID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgncCcpO1xuXHRlbGVtZW50LmlubmVySFRNTCA9IGBKYXZhU2NyaXB0IEJ1aWxkaW5nLiBTYXNzIEJ1aWxkaW5nLiBUZXN0aW5nIHdpdGggWyR7aW5wdXQuaWR9XS4gWW91ciBjdXN0b20gbGF5b3V0IGRvZXMgbm90IGV4aXN0IG9yIGNvbmZpZ3VyZWQgaW5jb3JyZWN0bHlgO1xuXHRyZXR1cm4gZWxlbWVudDtcbn07XG5cbm1vZHVsZS5leHBvcnRzID0gZnVuY3Rpb25fcnVuO1xuXG5cbi8vbmV3IGZ1Y250aW9uIGlzIGhlcmVcblxuXG4vL3N0YXJ0IGNhbGVuZGFyXG4vKlxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcblx0Ly92YXIgZGlzYWJsZWREYXlzID0gW1wiMjAyMi03LTI4XCJdO1xuXHQvL3ZhciB0aXBzID0gWydzb21lIGRlc2NyaXB0aW9uMSddO1xuXHQkKCcjbWRwJykubXVsdGlEYXRlc1BpY2tlcih7XG5cdC8vbWF4UGlja3M6IDUsXG5cdFxuXHRhbHRGaWVsZDogJyNtZHAtdmFsdWUnLFxuXHRkYXRlRm9ybWF0OiBcImRkLW1tLXl5XCIsXG5cdG1pbkRhdGU6IDAsXG5cdC8vbWF4RGF0ZTogXCIrMTJNXCIsXG5cdC8vYWRkRGlzYWJsZWREYXRlczogWycyNS0wOS0xMicgLCAnMjYtMDktMTInICwgJzI3LTA5LTEyJ10sXG5cdGJlZm9yZVNob3dEYXk6ICQuZGF0ZXBpY2tlci5ub1dlZWtlbmRzLFxuXHRiZWZvcmVTaG93RGF5OiBmdW5jdGlvbiAoZGF0ZSkge1xuICAgICAgICB2YXIgbSA9IFN0cmluZyhkYXRlLmdldE1vbnRoKCkgKyAxKS5wYWRTdGFydCgyLCAnMCcpO1xuICAgICAgICAgICAgZCA9IFN0cmluZyhkYXRlLmdldERhdGUoKSkucGFkU3RhcnQoMiwgJzAnKTtcbiAgICAgICAgICAgIHkgPSBkYXRlLmdldEZ1bGxZZWFyKCk7XG5cdFx0XHRkYXlzSW5Nb250aCA9IG5ldyBEYXRlKHksIG0sIDApLmdldERhdGUoKTtcblx0XHRcdGNsYXNzbmFtZV9uZXcgPSB5ICsgXCJcIiArIG0gKyBcIlwiICsgZDtcbiAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCBkYXlzSW5Nb250aDsgaSsrKSB7XG4gICAgICAgICAgICAvL2lmICgkLmluQXJyYXkoeSArICctJyArIChtICsgMSkgKyAnLScgKyBkLCBkaXNhYmxlZERheXMpICE9IC0xKSB7XG4gICAgICAgICAgICAvLyAgICByZXR1cm4gW3RydWUsICdoaWdobGlnaHQgJyArIGNsYXNzbmFtZV9uZXcgLCcnXTtcbiAgICAgICAgICAgIC8vfVxuXHRcdFx0cmV0dXJuIFt0cnVlLCBcImNsYXNzX1wiICsgY2xhc3NuYW1lX25ldyAsJyddO1xuICAgICAgICB9XG4gICAgICAgIHJldHVybiBbdHJ1ZV07XG4gICAgfSxcblx0bW9kZTogJ2RheXNSYW5nZScsXG5cdGF1dG9zZWxlY3RSYW5nZTogWzAsMTBdLFxuXHRvblNlbGVjdDogZnVuY3Rpb24oZGF0ZVRleHQpIHtcbiAgICAgICAgY29uc29sZS5sb2coXCJTZWxlY3RlZCBkYXRlOiBcIiArIGRhdGVUZXh0ICsgXCI7IGlucHV0J3MgY3VycmVudCB2YWx1ZTogXCIgKyB0aGlzLnZhbHVlKTtcblx0XHR2YXIgY291bnQgPSAkKHRoaXMpLnZhbCgpLnNwbGl0KCcsJykubGVuZ3RoO1xuXHRcdCQoXCIjdG9wdGl0bGVcIikudGV4dChjb3VudCArICcgc2VsZWN0ZWQnKTtcblx0XHRcbiAgICB9XG5cdH0pO1xuXG5cblxuXHRcblxuXG5cdCQoXCIuYW5zd2VyXCIpLmhpZGUoKTtcbiQoXCIuY291cG9uX3F1ZXN0aW9uXCIpLmNsaWNrKGZ1bmN0aW9uKCkge1xuICAgIGlmKCQodGhpcykuaXMoXCI6Y2hlY2tlZFwiKSkge1xuICAgICAgICAkKFwiLmFuc3dlclwiKS5zaG93KDUwMCk7XG4gICAgfSBlbHNlIHtcbiAgICAgICAgXG5cdFx0JCgnY3VzdG9tX3JpY2Vfd2hpdGUnKS52YWwoJycpO1xuXHRcdCQoJ2N1c3RvbV9yaWNlX2Jyb3duJykudmFsKCcnKTtcblx0XHQkKFwiLmFuc3dlclwiKS5oaWRlKDUwMCk7XG4gICAgfVxufSk7XG5cbiovXG5cblxuXG5cdFxuXG4vL30pOyAvL2VuZCBkb2N1bWVudCByZWFkeVxuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiLy8gVGhlIG1vZHVsZSBjYWNoZVxudmFyIF9fd2VicGFja19tb2R1bGVfY2FjaGVfXyA9IHt9O1xuXG4vLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcblx0dmFyIGNhY2hlZE1vZHVsZSA9IF9fd2VicGFja19tb2R1bGVfY2FjaGVfX1ttb2R1bGVJZF07XG5cdGlmIChjYWNoZWRNb2R1bGUgIT09IHVuZGVmaW5lZCkge1xuXHRcdHJldHVybiBjYWNoZWRNb2R1bGUuZXhwb3J0cztcblx0fVxuXHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuXHR2YXIgbW9kdWxlID0gX193ZWJwYWNrX21vZHVsZV9jYWNoZV9fW21vZHVsZUlkXSA9IHtcblx0XHQvLyBubyBtb2R1bGUuaWQgbmVlZGVkXG5cdFx0Ly8gbm8gbW9kdWxlLmxvYWRlZCBuZWVkZWRcblx0XHRleHBvcnRzOiB7fVxuXHR9O1xuXG5cdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuXHRfX3dlYnBhY2tfbW9kdWxlc19fW21vZHVsZUlkXShtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuXHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuXHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG59XG5cbiIsIi8vIGRlZmluZSBfX2VzTW9kdWxlIG9uIGV4cG9ydHNcbl9fd2VicGFja19yZXF1aXJlX18uciA9IChleHBvcnRzKSA9PiB7XG5cdGlmKHR5cGVvZiBTeW1ib2wgIT09ICd1bmRlZmluZWQnICYmIFN5bWJvbC50b1N0cmluZ1RhZykge1xuXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCBTeW1ib2wudG9TdHJpbmdUYWcsIHsgdmFsdWU6ICdNb2R1bGUnIH0pO1xuXHR9XG5cdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShleHBvcnRzLCAnX19lc01vZHVsZScsIHsgdmFsdWU6IHRydWUgfSk7XG59OyIsImltcG9ydCBzdHlsZXMgZnJvbSAnLi4vY3NzL21haW4nO1xuXG5yZXF1aXJlKCcuL2FkbWluLmpzJyk7XG5jb25zdCBmdW5jdGlvbl9ydW4gPSByZXF1aXJlKCcuL3V0aWxzLmpzJyk7XG4iXSwibmFtZXMiOlsiZnVuY3Rpb25fcnVuIiwiaW5wdXQiLCJjb25zb2xlIiwibG9nIiwibGF5b3V0IiwidW5kZWZpbmVkIiwiZm4iLCJmdW5jcyIsImVsZW1lbnQiLCJkb2N1bWVudCIsImNyZWF0ZUVsZW1lbnQiLCJpbm5lckhUTUwiLCJpZCIsIm1vZHVsZSIsImV4cG9ydHMiLCJzdHlsZXMiLCJyZXF1aXJlIl0sInNvdXJjZVJvb3QiOiIifQ==