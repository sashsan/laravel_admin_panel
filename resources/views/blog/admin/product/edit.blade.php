@extends('layouts.app_admin')

@section('content')


    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Редактирование продукта @endslot
            @slot('parent') Главная @endslot
            @slot('product') Список продуктов @endslot
                @slot('active') Редактирование продукта {{$product->title}} @endslot
        @endcomponent
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <form method="POST"  action="{{route('blog.admin.products.update', $product->id)}}" data-toggle="validator" id="add">
                        @method('PATCH')
                        @csrf
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование товара</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="{{$product->title}}" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group">
                                <label for="title">Категория товара</label>
                                <select name="parent_id" id="parent_id" class="form-control" required>
                                    <option disabled>-- выберите категорию --</option>

                                    @include('blog.admin.product.include.categories_for_prod',['categories' => $categories])

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="keywords">Ключевые слова</label>
                                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова" value="{{$product->keywords}}">
                            </div>

                            <div class="form-group">
                                <label for="description">Описание</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="{{$product->description}}">
                            </div>

                            <div class="form-group has-feedback">
                                <label for="price">Цена</label>
                                <input type="text" name="price" class="form-control" id="price" placeholder="Цена" pattern="^[0-9.]{1,}$" value="{{$product->price}}" required data-error="Допускаются цифры и десятичная точка">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="old_price">Цена</label>
                                <input type="text" name="old_price" class="form-control" id="old_price" placeholder="Старая цена" pattern="^[0-9.]{1,}$" value="{{$product->old_price}}" data-error="Допускаются цифры и десятичная точка">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="content">Контент</label>
                                <textarea name="content" id="editor1" cols="80" rows="10">{{$product->content}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="status" {{$product->status ? 'checked' : null}}> Статус
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="hit" {{$product->hit ? 'checked' : null}}> Хит
                                </label>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="related">Связанные товары</label>
                                <p><small>Начните вводить наименование товара...</small></p>
                                <select name="related[]" class="select2 form-control" id="related" multiple>

                                    @if (!empty($related_products))
                                        @foreach($related_products as $prod)
                                            <option value="{{$prod->related_id}}" selected>
                                                {{$prod->title}}
                                            </option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="related">Фильтры продукта</label>
                        {{ Widget::run('filter',
                            [
                            'tpl' => 'widgets.filter',
                            'filter' => $filter,
                            ])
                        }}
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    @include('blog.admin.product.include.image_single_edit',['product' => $product])
                                </div>

                                <div class="col-md-8" >
                                    @include('blog.admin.product.include.image_gallery_edit',['images' => $images])
                                </div>
                            </div>

                            <input type="hidden" id="_token" value="{{ csrf_token() }}">

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class = 'hidden' data-name='{{$id}}'></div>

@endsection



