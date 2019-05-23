@extends('layouts.app')
@section('content')
    <div class="container">
        <nav class="navbar">
            <a class="btn btn-primary" href="{{route('blog.admin.categories.create')}}">Добавить</a>
        </nav>
        <table class="table">
            <thead>
            <tr>
                <th>№</th>
                <th>Категория</th>
                <th>Родитель</th>
            </tr>
            </thead>
            <tbody>
            @foreach($paginator as $item)
                {{-- это чтобы начали работать клику по $item --}}
                @php /** @var \App\Models\BlogCategory $item */ @endphp
                <tr>
                    <td>{{$item->id}}</td>
                    <td><b>{{$item->title}}</b>
                        <a class="btn btn-info btn-sm" href="{{route('blog.admin.categories.edit', $item->id)}}">
                            редактировать
                        </a>

                    </td>
                    {{-- Определяю родителя --}}
                    <td @if(in_array($item->parent_id,[0, 1])) style="color:#ccc" @endif>
                        {{$item->parent_id}}  {{-- в дальнейшем я заменю на $item->parentCategory->title --}}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

        @if($paginator->total() > $paginator->count())
            <br>
            <div class="row justify-content-left">
                <div class="card">
                    <div class="card-body">
                        {{$paginator->links()}}
                    </div>
                </div>
            </div>
        @endif
        <br>

        {{$paginator}}
    </div>

@endsection

