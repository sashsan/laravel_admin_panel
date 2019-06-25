/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

Vue.config.devtools=false;
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});



/** Подтверждение удаление Категории */
$('.delete').click(function () {
    var res = confirm('Подтвердите действие');
    if (!res) return false;
});
/* - - - - - - */


/** Подтверждение удаление из БД Заказа */
$('.deletebd').click(function () {
    var res = confirm('Подтвердите действие');
    if (res){
        var ress = confirm('ВЫ УДАЛИТЕ ЗАПИСЬ ИЗ БД!');
        if (!ress) return false;
    }
    if (!res) return false;
});
/* - - - - - - */

/** Подтверждение удаление Категории */
$('.redact').click(function () {
    var res = confirm('Вы можете только изменить Комментарий');
    return false;
});
/** - - - - - - */


/** чтобы в админке слева меню горело активное */
$('.sidebar-menu a').each(function () {
// window.location.protocol = http или https далее конкатенация . ‘//’ .  //далее хост window.location.host + и window.location.pathname
    var location = window.location.protocol + '//' + window.location.host + window.location.pathname;
//текущая ссылка в этом элементе '.sidebar-menu a'
    var link = this.href;
//ну и сравниваю их
    if (link == location){
//делаю активной родителя , даю класс ей 'active'
        $(this).parent().addClass('active');
// даю класс 'active' ближайшего предка с классом treeview'
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
    if (window.location.pathname === edit){
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
        data: function (params) {
            return {
                q: params.term,
                page: params.page
            };
        },
        processResults: function (data, params) {
            return {
                results: data.items
            };
        }
    }
});
/** ===== */


