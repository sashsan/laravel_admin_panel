@extends('layouts.app_admin')

@section('content')


    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Список товаров @endslot
            @slot('parent') Главная @endslot
            @slot('product') Список заказов @endslot
            @slot('active') Новый товар< @endslot
        @endcomponent
    </section>


    <!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!--data-toggle="validator"  для валидации полей-->
                <!--id="add" для my.js $('#add').on('submit',function ()-->
                <form action="/product/add" method="post" data-toggle="validator" id="add">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование товара</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="" required>
                            <!-- галочки при валидации справа -это
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                -->
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group">
                            <label for="category_id">Родительская категория</label>

                        </div>



                        <div class="form-group">
                            <label for="keywords">Ключевые слова</label>
                            <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова" value="">
                        </div>


                        <div class="form-group">
                            <label for="description">Описание</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="">
                        </div>


                        <div class="form-group has-feedback">
                            <label for="price">Цена</label>
                            <input type="text" name="price" class="form-control" id="description" placeholder="Цена" pattern="^[0-9.]{1,}$" value="" required data-error="Допускаются цифры и десятичнаяя точка">
                            <div class="help-block with-errors"></div>
                        </div>


                        <div class="form-group has-feedback">
                            <label for="old_price">Старая цена</label>
                            <input type="text" name="old_price" class="form-control" id="description" placeholder="Старая цена" pattern="^[0-9.]{1,}$" value=""
                                   data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>


                        <div class="form-group has-feedback">
                            <label for="content">Контент</label>
                            <textarea name="content" id="editor1" cols="30" rows="10"></textarea>
                        </div>




                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="status" checked> Статус
                            </label>
                        </div>


                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="hit"> Хит
                            </label>
                        </div>

                        <!--                        Для select связанные товары в админке добавить товар-->
                        <div class="form-group has-feedback">
                            <label for="related">Связанные товары</label>
                            <select name="related[]" class="form-control select2" id="related" multiple></select>
                        </div>




                    <!-- загрузка картинок в проекте ajaxupload.js для загрузки картинок -->
                        <!-- использовано my.js и my.css -->
                        <!--https://dcrazed.com/html5-jquery-file-upload-scripts/ -->
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="box box-danger box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Базовое изображение</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single" class="btn btn-success" data-url="product/add-image" data-name="single">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 125ш.х200в.</small></p>
                                        <div class="single"></div>
                                    </div>
                                    <!-- my.css .overlay{}-->
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="box box-primary box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Картинки галереи</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="multi" class="btn btn-success" data-url="product/add-image" data-name="multi">Выбрать файл</div>
                                        <p><small>Рекомендуемые размеры: 700ш.х1000в.</small></p>
                                        <div class="multi"></div>
                                    </div>
                                    <!--my.css .overlay{}-->
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Добавить</button>
                    </div>
                </form>



            </div>
        </div>
    </div>

</section>
<!-- /.content -->

@endsection
