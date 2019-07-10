@extends('layouts.app_admin')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Добавить группу @endslot
            @slot('parent') Главная @endslot
            @slot('group_filter') Группа фильтров @endslot
            @slot('active') Новая группа @endslot
        @endcomponent
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <!--   data-toggle="validator"  ДЛЯ ВАЛИДАЦИИ-->
                        <form action="{{url('/admin/filter/group-add-group')}}" method="post" data-toggle="validator">
                            @csrf

                            <div class="box-body">
                                <div class="form-group has-feedback">
                                    <label for="title">Наименование группы</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Наименование группы" value="{{old('title')}}" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
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


@endsection
