
@extends('layouts.app_admin')

@section('content')


    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Список товаров @endslot
            @slot('parent') Главная @endslot
            @slot('active') Список товаров @endslot
        @endcomponent
    </section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ктегория</th>
                                <th>Наименование</th>
                                <th>Цена</th>
                                <th>Статус</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($getAllProducts as $product)
                                @if ($product->status == 0)
                            <tr>
                                <td><strong>{{$product->id}}</strong></td>
                                <td><strong>{{$product->cat}}</strong></td>
                                <td><strong>{{$product->title}}</strong></td>
                                <td><strong>{{$product->price}}</strong></td>
                                <!--если статут true или 1 то On если false или 0 то Off-->
                                <td><strong>{{$product->status ? 'On' : 'Off'}}</strong></td>

                                <td>
                                    <a href="{{route('blog.admin.products.edit',$product->id)}}" title="просмотреть заказ"><i class="fa fa-fw fa-eye"></i></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="" title="удалить заказ"><i class="fa fa-fw fa-close text-danger delete"></i></a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="" title="вернуть статус"><i class="fa fa-fw fa-refresh text-danger update"></i></a>

                                </td>
                            </tr>
                            @else
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->cat}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->price}}</td>
                                <!--если статут true или 1 то On если false или 0 то Off-->
                                <td>{{$product->status ? 'On' : 'Off'}}</td>

                                <td>
                                    <a href="{{route('blog.admin.products.edit',$product->id)}}" title="просмотреть заказ"><i class="fa fa-fw fa-eye"></i></a>
                                    &nbsp;	&nbsp;  &nbsp;  &nbsp;
                                    <a href="" title="удалить заказ"><i class="fa fa-fw fa-close text-danger delete"></i></a>
                                </td>
                            </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                    <p>{{count($getAllProducts)}} продуктов из {{$count}} </p>

                    @if ($getAllProducts->total() > $getAllProducts->count())
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        {{$getAllProducts->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->

    @endsection
