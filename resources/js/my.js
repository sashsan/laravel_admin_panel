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

/** Редактирование коментария */
$('.redact').click(function () {
    var res = confirm('Вы можете только изменить Комментарий.');
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

if(buttonMulti && window.location.pathname === create || window.location.pathname === edit){
    new AjaxUpload(buttonMulti, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        action: buttonMulti.data('url') + "?upload=1",
        data: {name: buttonMulti.data('name'), _token: _token},
        name: buttonMulti.data('name'),
        onSubmit: function (file, ext) {
            if (!(ext && /^(jpg|png|jpeg|gif)$/i.test(ext))) {
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonMulti.closest('.file-upload').find('.overlay').css({'display': 'block'});

        },
        onComplete: function (file, response) {
            setTimeout(function () {
                buttonMulti.closest('.file-upload').find('.overlay').css({'display': 'none'});

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
        data: {id: id, src: src, _token: _token},
        type: 'POST',
        beforeSend: function () {
            $this.closest('.file-upload').find('.overlay').css({'display': 'block'});
        },
        success: function (res) {
            setTimeout(function () {
                $this.closest('.file-upload').find('.overlay').css({'display': 'none'});
                if (res == 1) {
                    $this.fadeOut();
                }
            }, 1000);
        }
    });
});

/** ===== */



