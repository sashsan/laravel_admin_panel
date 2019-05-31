@extends('layouts.app_admin')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Создание категории @endslot
            @slot('parent') Главная @endslot
            @slot('category') Список категорий @endslot
            @slot('active') Создание категории @endslot
        @endcomponent
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <form action="/category/add" method="post" data-toggle="validator">
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование категории</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование категории" required>
                                <!-- галочки при валидации справа -это
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  -->
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">

                                 <label for="parent_id">Родительская категория</label>

                            </div>
                            <div class="form-group">
                                <label for="keywords">Ключевые слова</label>
                                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова">

                            </div>
                            <div class="form-group">
                                <label for="description">Описание</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Описание">
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
