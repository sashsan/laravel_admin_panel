
@extends('layouts.app_admin')

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактировать
        Заказ № {{$item->id}}
    <!-- если заказ новый не обработан то выведем кнопочку и передадим status 1 -->
        @foreach($order as $ord)
            @if (!$ord->status)
                <a href="/order/change?id=&status=1" class="btn btn-success btn-xs">Обобрить</a>
                <a href="/order/change?id=" class="btn btn-warning btn-xs">Редактировать</a>
                @else
                <a href="/order/change?id=&status=0" class="btn btn-default btn-xs">Вернуть на доработку</a>
            @endif
            <a href="/order/delete?id=" class="btn btn-danger btn-xs delete">Удалить</a>
        @endforeach
    </h1>

    @component('blog.admin.components.breadcrumb')
        @slot('parent') Главная @endslot
        @slot('order') Список заказов @endslot
        @slot('active') Заказ №  {{$item->id}} @endslot
    @endcomponent

</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        @foreach($order as $ord)
                        <form action="" method="post">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                <tr>
                                    <td>Номер заказа</td>
                                    <td>{{$ord->id}}</td>
                                </tr>
                                <tr>
                                    <td>Дата заказа</td>
                                    <td>{{$ord->created_at}}</td>
                                </tr>
                                <tr>
                                    <td>Дата изменения</td>
                                    <td>{{$ord->update_at}}</td>
                                </tr>
                                <tr>
                                    <td>Кол-во позиций в заказе</td>
                                    <td>{{count($order_products)}}</td>
                                </tr>
                                <tr>
                                    <td>Сумма</td>
                                    <td>{{$ord->sum}} {{$ord->currency}}</td>
                                </tr>
                                <tr>
                                    <td>Имя заказчика</td>
                                    <td>{{$ord->name}}</td>
                                </tr>
                                <tr>
                                    <td>Статус</td>
                                    <td>{{$ord->status ? 'Завершен' : 'Новый'}}</td>
                                </tr>
                                <tr>
                                    <td>Комментарий</td>
                                    <td><input type="text" value="{{$ord->note}}" name="comment"></td>
                                </tr>

                                </tbody>

                            </table>
                            <input type="submit" name="submit" class="btn btn-warning" value="Сохранить">
                        </form>
                            @endforeach
                    </div>
                </div>
            </div>

            <h3>Детали заказа</h3>
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Наименование</th>
                                <th>Кол-во</th>
                                <th>Цена</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $qty = 0 @endphp
                            @foreach($order_products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->qty, $qty+=$product->qty}}</td>
                                <td>{{$product->price}}</td>
                            </tr>
                           @endforeach

                            <tr class="active">
                                <td colspan="2"><b>Итого:</b></td>
                                <td><b>{{$qty}}</b></td>
                                @foreach($order as $ord)
                                <td><b>{{$ord->sum}} {{$ord->curreny}}</b></td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
@endsection
