@extends('layouts.app_admin')

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Панель упраления @endslot
            @slot('parent') Главная @endslot
            @slot('active') Очистка кэша @endslot
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
                                <th>Название</th>
                                <th>Описание</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Кэш меню-категорий</td>
                                <td>Меню на сайте. Кэшируется на один час</td>
                                <td style="text-align: center"><a class="delete" href="{{route('blog.admin.delete','category')}}"  title="Удалить кэш"><i class="fa fa-fw fa-close text-danger"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Кэш фильтров</td>
                                <td>Кэш фильтров и групп фильтров. Кэшируются на один час</td>
                                <td style="text-align: center"><a class="delete" href="{{route('blog.admin.delete', 'filter')}}"  title="Удалить кэш"><i class="fa fa-fw fa-close text-danger"></i></a>
                                </td>
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
