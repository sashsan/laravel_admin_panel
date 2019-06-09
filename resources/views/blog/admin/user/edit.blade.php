
@extends('layouts.app_admin')

@section('content')



    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Редактирование пользователя @endslot
            @slot('parent') Главная @endslot
            @slot('user') Список пользователей @endslot
            @slot('active') Редактирование пользователя @endslot
        @endcomponent
    </section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <!--для валидации data-toggle="validator"-->
                <form action="{{route('blog.admin.users.update', $item->id)}}" method="post" data-toggle="validator">

                    @csrf
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="login">Логин</label>
                            <input type="text" class="form-control" name="login" id="login" value="{{$item->name}}" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Введите пароль, если хотите его изменить">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Имя</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$item->name}}" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{$item->email}}" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="address">Роль</label>
                            <select name="role" id="role" class="form-control">
                        <option value="user" @php if ($role == 'user') echo ' selected' @endphp>Пользователь</option>
                        <option value="admin" @php if ($role == 'admin') echo ' selected' @endphp>Администратор</option>
                        <option value="disabled" @php if ($role == 'disabled') echo ' selected' @endphp>Disabled</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
            <h3>Заказы пользователя</h3>
            <div class="box">
                <div class="box-body">
                @if($count)

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Статус</th>
                                <th>Сумма</th>
                                <th>Дата создания</th>
                                <th>Дата изменения</th>
                                <th>Действия</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($orders as $order)
                                @php $class = $order->status ? 'success' : '' @endphp
                            <tr class="{{$class}}">
                                <td>{{$order->id}}</td>
                                <td>{{$order->status ? 'Заверешен' : 'Новый'}}</td>
                                <td>{{$order->sum}} {{$order->currency}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->updated_at}}</td>
                                <td><a href="{{route('blog.admin.orders.edit',$order->id)}}"><i class="fa fa-fw fa-eye"></i></a></td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @else
                            <p class="text-danger">Пользокатель пока ничего не заказывал...</p>
                    @endif

                </div>
            </div>

            <div class="text-center">
                <p>{{count($count_orders)}} заказа из {{$count}} </p>

                @if ($orders->total() > $orders->count())
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    {{$orders->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</section>
<!-- /.content -->
@endsection
