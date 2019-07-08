@extends('layouts.app_admin')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Валюта @endslot
            @slot('parent') Главная @endslot
            @slot('active') Валюта @endslot
        @endcomponent
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <a href="{{url('/admin/currency/add')}}" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Добавить валюту</a>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Код</th>
                                    <th>Значение</th>
                                    <th>Базовая</th>
                                    <th>Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($currency as $item)
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->code}}</td>
                                <td>{{$item->value}}</td>
                                <td>@if ($item->base == 1) Да @else Нет @endif</td>
                                <td>
                                    <a href="{{url('/admin/currency/edit', $item->id)}}" title="редактировать"><i class="fa fa-fw fa-edit"></i></a>
                                    &nbsp; &nbsp;  &nbsp;  &nbsp;
                                    <a href="{{url('/admin/currency/delete', $item->id)}}" title="удалить "><i class="fa fa-fw fa-close text-danger delete"></i></a>
                                </td>
                                </tr>
                                @endforeach
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

