
/** Для загрузки Галереи */
var buttonMulti = $("#multi"),
    file;

var _token = $('input#_token').val();


var form_data2 = new FormData();
form_data2.append("_token", _token);

if(buttonMulti){
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
