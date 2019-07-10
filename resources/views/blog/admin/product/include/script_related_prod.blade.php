<script>

    $(document).ready(function () {

        if ($('#galleryjs').length > 0) {

            /** Для select связанные товары в админке добавить товар */
            $(".select2").select2({
                placeholder: "Начните вводить наименование товара",
                //minimumInputLength: 2, с какого симв. посылать запрос
                cache: true,
                ajax: {
                    url: "{{url('/admin/products/related')}}",
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

        }
    });


</script>
