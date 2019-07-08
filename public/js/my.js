/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/my.js":
/*!****************************!*\
  !*** ./resources/js/my.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

/** Подтверждение удаление Категории */
$('.delete').click(function () {
  var res = confirm('Подтвердите действие');
  if (!res) return false;
});
/* - - - - - - */

/** Подтверждение удаление из БД Заказа */

$('.deletebd').click(function () {
  var res = confirm('Подтвердите действие');

  if (res) {
    var ress = confirm('ВЫ УДАЛИТЕ ЗАПИСЬ ИЗ БД!');
    if (!ress) return false;
  }

  if (!res) return false;
});
/* - - - - - - */

/** Редактирование коментария */

$('.redact').click(function () {
  var res = confirm('Вы можете только изменить Комментарий.');
  return false;
});
/** - - - - - - */

/** чтобы в админке слева меню горело активное */

$('.sidebar-menu a').each(function () {
  // window.location.protocol = http или https далее конкатенация . ‘//’ .  //далее хост window.location.host + и window.location.pathname
  var location = window.location.protocol + '//' + window.location.host + window.location.pathname; //текущая ссылка в этом элементе '.sidebar-menu a'

  var link = this.href; //ну и сравниваю их

  if (link == location) {
    //делаю активной родителя , даю класс ей 'active'
    $(this).parent().addClass('active'); // даю класс 'active' ближайшего предка с классом treeview'

    $(this).closest('.treeview').addClass('active');
  }
});
/** --------- */

/** KCFinder  */

var create = '/admin/products/create';

if (window.location.pathname === create) {
  CKEDITOR.replace('editor1');
}

var id = $('div.hidden').data('name');
var edit = '/admin/products/' + id + '/edit';

if (window.location.pathname === edit) {
  CKEDITOR.replace('editor1');
}
/** ----------- */

/** для кнопки сбросить в админке добавление товара, в admin_filter_tpl.php добавил */


$('#reset-filter').click(function () {
  $('#filter input[type=radio]').prop('checked', false);
  return false;
});
/** ----------- */

/** Для select связанные товары в админке добавить товар */

$(".select2").select2({
  placeholder: "Начните вводить наименование товара",
  //minimumInputLength: 2, с какого симв. посылать запрос
  cache: true,
  ajax: {
    url: '/admin/products/related',
    delay: 250,
    dataType: 'json',
    data: function data(params) {
      return {
        q: params.term,
        page: params.page
      };
    },
    processResults: function processResults(data, params) {
      return {
        results: data.items
      };
    }
  }
});
/** ===== */

/** You must choose category */

$('#add').on('submit', function () {
  if (!isNumeric($('#parent_id').val())) {
    alert('Выберите категорию');
    return false;
  }
});
/** You must choose category */

$('#addattrs').on('submit', function () {
  if (!isNumeric($('#category_id').val())) {
    alert('Выберите группу');
    return false;
  }
});
/** Является ли поле числом true / false  вместе с предыдущим */

function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}
/** ===== */

/** Для загрузки Галереи */


var buttonMulti = $("#multi"),
    file;

var _token = $('input#_token').val();

var form_data2 = new FormData();
form_data2.append("_token", _token);

if (buttonMulti && window.location.pathname === create || window.location.pathname === edit) {
  new AjaxUpload(buttonMulti, {
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    action: buttonMulti.data('url') + "?upload=1",
    data: {
      name: buttonMulti.data('name'),
      _token: _token
    },
    name: buttonMulti.data('name'),
    onSubmit: function onSubmit(file, ext) {
      if (!(ext && /^(jpg|png|jpeg|gif)$/i.test(ext))) {
        alert('Ошибка! Разрешены только картинки');
        return false;
      }

      buttonMulti.closest('.file-upload').find('.overlay').css({
        'display': 'block'
      });
    },
    onComplete: function onComplete(file, response) {
      setTimeout(function () {
        buttonMulti.closest('.file-upload').find('.overlay').css({
          'display': 'none'
        });
        response = JSON.parse(response);
        $('.' + buttonMulti.data('name')).append('<img src="/uploads/gallery/' + response.file + '" style="max-height: 150px;">');
      }, 1000);
    }
  });
}
/** ===== */

/** Для удаления картинок в Редактировании товара Галлерея */


$('.del-items').on('click', function () {
  var res = confirm('Подтвердите удаление');

  if (!res) {
    return false;
  }

  var $this = $(this);
  id = $this.data('id');
  src = $this.data('src');
  $.ajax({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: '/admin/products/delete-gallery',
    data: {
      id: id,
      src: src,
      _token: _token
    },
    type: 'POST',
    beforeSend: function beforeSend() {
      $this.closest('.file-upload').find('.overlay').css({
        'display': 'block'
      });
    },
    success: function success(res) {
      setTimeout(function () {
        $this.closest('.file-upload').find('.overlay').css({
          'display': 'none'
        });

        if (res == 1) {
          $this.fadeOut();
        }
      }, 1000);
    }
  });
});
/** ===== */

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/my.scss":
/*!********************************!*\
  !*** ./resources/sass/my.scss ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************************************!*\
  !*** multi ./resources/js/my.js ./resources/sass/app.scss ./resources/sass/my.scss ***!
  \*************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\OSPanel\domains\laravel.blog.san\resources\js\my.js */"./resources/js/my.js");
__webpack_require__(/*! D:\OSPanel\domains\laravel.blog.san\resources\sass\app.scss */"./resources/sass/app.scss");
module.exports = __webpack_require__(/*! D:\OSPanel\domains\laravel.blog.san\resources\sass\my.scss */"./resources/sass/my.scss");


/***/ })

/******/ });