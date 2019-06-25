

<div class="box box-primary box-solid file-upload" style="text-align: center;">
    <div class="box-header">
        <h3 class="box-title">Картинки галереи</h3>
    </div>


    <div style="width: 33.3%; float: left;">
    <div class="box-body" id="image_1" style=" border: 1px solid whitesmoke ; text-align: center; position: relative" >
        @if (empty($gallery[0]))
            <img width="50%" height="50%" src="/images/no_image.jpg" id="preview_image_1"/>
        @else
            <img width="50%" height="50%" src="/uploads/gallery/{{$gallery[0]}}" id="preview_image_1"/>
        @endif

        <i id="loading_1" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
    </div>
    <p style="text-align: center">
        <a href="javascript:changeProfile_1()" style="text-decoration: none;" data-name="multi_1">
            <i class="glyphicon glyphicon-edit"></i> Загрузить
        </a>&nbsp;&nbsp;
        <a href="javascript:removeFile_1()" style="color: red;text-decoration: none;">
            <i class="glyphicon glyphicon-trash"></i>
            Удалить
        </a>
    </p>
        <input type="file" id="file_1" style="display: none"/>
        <input type="hidden" id="file_name_1"/>
    </div>



    <div style="width: 33.3%; float: left;">
        <div class="box-body" id="image_2" style=" border: 1px solid whitesmoke ; text-align: center; position: relative" >

            @if (empty($gallery[1]))
                <img width="50%" height="50%" src="/images/no_image.jpg" id="preview_image_2"/>
            @else
                <img width="50%" height="50%" src="/uploads/gallery/{{$gallery[1]}}" id="preview_image_2"/>
            @endif

            <i id="loading_2" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
        </div>
        <p style="text-align: center">
            <a href="javascript:changeProfile_2()" style="text-decoration: none;" data-name="multi_2">
                <i class="glyphicon glyphicon-edit"></i> Загрузить
            </a>&nbsp;&nbsp;
            <a href="javascript:removeFile_2()" style="color: red;text-decoration: none;">
                <i class="glyphicon glyphicon-trash"></i>
                Удалить
            </a>
        </p>
        <input type="file" id="file_2" style="display: none"/>
        <input type="hidden" id="file_name_2"/>
    </div>



    <div style="width: 33.3%; float: left;">
        <div class="box-body" id="image_3" style=" border: 1px solid whitesmoke ; text-align: center; position: relative" >
            @if (empty($gallery[2]))
                <img width="50%" height="50%" src="/images/no_image.jpg" id="preview_image_3"/>
            @else
                <img width="50%" height="50%" src="/uploads/gallery/{{$gallery[2]}}" id="preview_image_3"/>
            @endif
            <i id="loading_3" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
        </div>
        <p style="text-align: center">
            <a href="javascript:changeProfile_3()" style="text-decoration: none;" data-name="multi_3">
                <i class="glyphicon glyphicon-edit"></i> Загрузить
            </a>&nbsp;&nbsp;
            <a href="javascript:removeFile_3()" style="color: red;text-decoration: none;">
                <i class="glyphicon glyphicon-trash"></i>
                Удалить
            </a>
        </p>
        <input type="file" id="file_3" style="display: none"/>
        <input type="hidden" id="file_name_3"/>
    </div>



    <p style="text-align: center"><small>Рекомендуемые размеры: 700ш.х1000в.</small></p>
</div>


