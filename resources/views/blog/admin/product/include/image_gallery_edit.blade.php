<div class="box box-primary box-solid file-upload">
    <div class="box-header">
        <h3 class="box-title">Картинки галереи</h3>
    </div>
    <div class="box-body">
        <div id="multi" class="btn btn-success" data-url="/admin/products/gallery" data-name="multi">Загрузить</div>
        <p><small>Рекомендуемые размеры: 700ш.х1000в.</small></p>
        <div class="multi">

        @if (!empty($images))
            @foreach($images as $image)
                    <img src="/uploads/gallery/{{$image}}" alt="" style="max-height: 150px; cursor: pointer;" data-id="{{$product->id}}" data-src="{{$image}}" class="del-items">
            @endforeach
        @endif

        </div>
    </div>
    <!--my.css .overlay{}-->
    <div class="overlay">
        <i class="fa fa-refresh fa-spin"></i>
    </div>
</div>













