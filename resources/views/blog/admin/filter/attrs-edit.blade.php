@extends('layouts.app_admin')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Редактирование фильтра @endslot
            @slot('parent') Главная @endslot
            @slot('attrs_filter') Список фильтров @endslot
            @slot('active') Редактирование фильтра @endslot
        @endcomponent
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <!-- id="addattrs"  для my.js //Чтобы нужно было обязательно выбрать  -->
                    <form action="{{url('/admin/filter/attr-edit', $atrr->id)}}" method="post" data-toggle="validator" id="addattrs">
                        @csrf
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="value">Наименование</label>
                                <input type="text" name="value" class="form-control" id="value" placeholder="Наименование" value="{{$atrr->value}}" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Группа</label>
                                <select name="attr_group_id" id="category_id" class="form-control">
                                    <option>Выберите группу</option>
                                    @foreach($group as $item)
                                        <option value="{{$item->id}}"  @if($atrr->attr_group_id == $item->id) selected @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Изменить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

@endsection


