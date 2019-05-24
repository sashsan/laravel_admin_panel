
@extends('layouts.app_admin')

@section('content')


<section class="content-header">
    @component('blog.admin.components.breadcrumb')
        @slot('title') Список заказов @endslot
        @slot('parent') Главная @endslot
        @slot('active') Список заказов @endslot
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
                                <th>Покупатель</th>
                                <th>Статус</th>
                                <th>Сумма</th>
                                <th>Дата создания</th>
                                <th>Дата изменения</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($paginator as $order)
                                @php $class = $order->status ? 'success' : '' @endphp
                            <tr class="{{$class}}">
                                <td>{{$order->id}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->status ? 'Завершен' : 'Новый'}}</td>
                                <td>{{$order->sum}} {{$order->currency}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->update_at}}</td>
                                <td>
                                    <a href="{{route('blog.admin.orders.edit',$order->id)}}" title="редактировать заказ"><i class="fa fa-fw fa-eye"></i></a>

                                    <a href="{{route('blog.admin.orders.destroy',$order->id)}}" title="удалить заказ"><i class="fa fa-fw fa-close text-danger delete"></i></a>
                                </td>
                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <p>{{count($paginator)}} заказа(ов) из {{$countOrders}} </p>

                        @if ($paginator->total() > $paginator->count())
                            <br>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            {{$paginator->links()}}
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
