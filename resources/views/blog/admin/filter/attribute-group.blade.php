@extends('layouts.app_admin')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Группа фильтров @endslot
            @slot('parent') Главная @endslot
            @slot('active') Группа фильтров @endslot
        @endcomponent
    </section>

    <!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <a href="{{url('/admin/filter/group-add-group')}}" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i> Добавить группу</a>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Наименование</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attrs_group as $attr)
                            <tr>
                                <td>{{$attr->id}} &nbsp; {{$attr->title}}</td>
                                <td>
                                    <a href="{{url('/admin/filter/group-edit', $attr->id)}}"><i class="fa fa-fw fa-pencil" title="Редактировать"></i></a>&nbsp;  &nbsp; &nbsp;
                                    <a class="delete text-danger" href="{{url('/admin/filter/group-delete',$attr->id)}}"><i class="fa fa-fw fa-close text-danger" title="Удалить"></i></a>
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
