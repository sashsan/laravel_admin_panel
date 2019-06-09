
@extends('layouts.app_admin')

@section('content')



    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Добавление пользователя @endslot
            @slot('parent') Главная @endslot
            @slot('user') Список пользователей @endslot
            @slot('active') Добавление пользователя @endslot
        @endcomponent
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <!--для валидации data-toggle="validator"-->
                    <form action="{{route('blog.admin.users.store')}}" method="post" data-toggle="validator">
                        @csrf
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="name">Имя</label>
                                <input type="text" class="form-control" name="name" id="name" value="@if(old('name')){{old('name')}} @else @endif" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Пароль</label>
                                <input type="text" class="form-control" name="password" value="@if(old('password')){{old('password')}} @else @endif" required>
                            </div>
                            <div class="form-group">
                                <label for="">Подтверждение пароля</label>
                                <input type="text" class="form-control" name="password_confirmation" value="@if(old('password_confirmation')){{old('password_confirmation')}} @else @endif" required>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="@if(old('email')){{old('email')}}@else @endif" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <label for="address">Роль</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="2" selected>Пользователь</option>
                                    <option value="3">Администратор</option>
                                    <option value="1">Disabled</option>
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="hidden" name="id" value="">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </section>
    <!-- /.content -->



@endsection
