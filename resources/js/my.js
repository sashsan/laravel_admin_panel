/* Подтверждение удаление Категории */
$('.delete').click(function () {
    var res = confirm('Подтвердите действие');
    if (!res) return false;
});
/* - - - - - - */
/* Подтверждение удаление из БД Заказа */
$('.deletebd').click(function () {
    var res = confirm('Подтвердите действие');
    if (res){
        var ress = confirm('ВЫ УДАЛИТЕ ЗАПИСЬ ИЗ БД!');
        if (!ress) return false;
    }
    if (!res) return false;
});
/* - - - - - - */

/* Подтверждение удаление Категории */
$('.redact').click(function () {
    var res = confirm('Вы можете только изменить Комментарий');
    return false;
});
/* - - - - - - */

/* чтобы в админке слева меню горело активное */
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
/* --------- */

$(document).ready(function () {
    if (window.location.pathname == '/admin/products/create') {
        CKEDITOR.replace('editor1');
    }
});

/* для кнопки сбросить в админке добавление товара, в admin_filter_tpl.php добавил */
$('#reset-filter').click(function () {
    $('#filter input[type=radio]').prop('checked', false);
    return false;
});
/* ----------- */

/* Для select связанные товары в админке добавить товар */
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
/* ===== */
/* Для загрузки картинок в админку */

if($('div').is('#single')){
    var buttonSingle = $("#single"),
        buttonMulti = $("#multi"),
        file;
}


if(buttonSingle){
    new AjaxUpload(buttonSingle, {
        action: '/admin/' + buttonSingle.data('url') + "?upload=1",
        data: {name: buttonSingle.data('name')},
        name: buttonSingle.data('name'),
        onSubmit: function(file, ext){
            if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                alert('Ошибка! Разрешены только картинки');
                return false;
            }
            buttonSingle.closest('.file-upload').find('.overlay').css({'display':'block'});

        },
        onComplete: function(file, response){
            setTimeout(function(){
                buttonSingle.closest('.file-upload').find('.overlay').css({'display':'none'});

                response = JSON.parse(response);

                $('.' + buttonSingle.data('name')).html('<img src="/images/' + response.file + '" style="max-height: 150px;">');
            }, 1000);
        }
    });
}
