<script>

    var buttonMulti = $("#multi_1");

    function changeProfile_1() {
        $('#file_1').click();
    }

    $('#file_1').change(function () {
        if ($(this).val() != '') {
            upload_1(this);

        }
    });

    function upload_1(img) {
        var form_data = new FormData();
        form_data.append('file', img.files[0]);
        form_data.append('_token', '{{csrf_token()}}');
        $('#loading_1').css('display', 'block');
        $.ajax({
            url: "{{url('/admin/products/ajax-images-upload')}}",
            name: buttonMulti.data('name'),
            data: form_data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#preview_image_1').attr('src', '{{asset('images/no_image.jpg')}}');
                    alert(data.errors['file']);
                }
                else {
                    $('#file_name_1').val(data);
                    $('#preview_image_1').attr('src', '{{asset('uploads/gallery')}}/' + data);
                }
                $('#loading_1').css('display', 'none');
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
                $('#preview_image_1').attr('src', '{{asset('images/no_image.jpg')}}');
            }
        });
    }

    function removeFile_1() {
        if ($('#file_name_1').val() != '')
            if (confirm('Are you sure want to remove profile picture?')) {
                $('#loading_1').css('display', 'block');
                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', '{{csrf_token()}}');
                $.ajax({
                    url: "/admin/products/ajax-remove-images/" + $('#file_name_1').val(),
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#preview_image_1').attr('src', '{{asset('images/no_image.jpg')}}');
                        $('#file_name_1').val('');
                        $('#loading_1').css('display', 'none');
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    }
                });
            }
    }




    var buttonMulti2 = $("#multi_2");

    function changeProfile_2() {
        $('#file_2').click();
    }

    $('#file_2').change(function () {
        if ($(this).val() != '') {
            upload_2(this);

        }
    });

    function upload_2(img) {
        var form_data = new FormData();
        form_data.append('file', img.files[0]);
        form_data.append('_token', '{{csrf_token()}}');
        $('#loading_2').css('display', 'block');
        $.ajax({
            url: "{{url('/admin/products/ajax-images-upload')}}",
            name: buttonMulti2.data('name'),
            data: form_data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#preview_image_2').attr('src', '{{asset('images/no_image.jpg')}}');
                    alert(data.errors['file']);
                }
                else {
                    $('#file_name_2').val(data);
                    $('#preview_image_2').attr('src', '{{asset('uploads/gallery')}}/' + data);
                }
                $('#loading_2').css('display', 'none');
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
                $('#preview_image_2').attr('src', '{{asset('images/no_image.jpg')}}');
            }
        });
    }

    function removeFile_2() {
        if ($('#file_name_2').val() != '')
            if (confirm('Are you sure want to remove profile picture?')) {
                $('#loading_2').css('display', 'block');
                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', '{{csrf_token()}}');
                $.ajax({
                    url: "/admin/products/ajax-remove-images/" + $('#file_name_2').val(),
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#preview_image_2').attr('src', '{{asset('images/no_image.jpg')}}');
                        $('#file_name_2').val('');
                        $('#loading_2').css('display', 'none');
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    }
                });
            }
    }



    var buttonMulti3 = $("#multi_3");

    function changeProfile_3() {
        $('#file_3').click();
    }

    $('#file_3').change(function () {
        if ($(this).val() != '') {
            upload_3(this);

        }
    });

    function upload_3(img) {
        var form_data = new FormData();
        form_data.append('file', img.files[0]);
        form_data.append('_token', '{{csrf_token()}}');
        $('#loading_3').css('display', 'block');
        $.ajax({
            url: "{{url('/admin/products/ajax-images-upload')}}",
            name: buttonMulti3.data('name'),
            data: form_data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#preview_image_3').attr('src', '{{asset('images/no_image.jpg')}}');
                    alert(data.errors['file']);
                }
                else {
                    $('#file_name_3').val(data);
                    $('#preview_image_3').attr('src', '{{asset('uploads/gallery')}}/' + data);
                }
                $('#loading_3').css('display', 'none');
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
                $('#preview_image_3').attr('src', '{{asset('images/no_image.jpg')}}');
            }
        });
    }

    function removeFile_3() {
        if ($('#file_name_3').val() != '')
            if (confirm('Are you sure want to remove profile picture?')) {
                $('#loading_3').css('display', 'block');
                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', '{{csrf_token()}}');
                $.ajax({
                    url: "/admin/products/ajax-remove-images/" + $('#file_name_3').val(),
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#preview_image_3').attr('src', '{{asset('images/no_image.jpg')}}');
                        $('#file_name_3').val('');
                        $('#loading_3').css('display', 'none');
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    }
                });
            }
    }


</script>
