@extends('layouts.app')
@section('content')

    @php
        /** @var \App\Models\BlogCategory $item */
    @endphp

    @if ($errors->any())
        <div class="row justify-content-center">
            <div class="col-md-11">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>

                        <li>{{$error}}</li>

                    </div>
                @endforeach
            </div>
        </div>
    @endif
    @if (session('success'))
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                    {{ session()->get('success') }}
                </div>
            </div>
        </div>
    @endif

    <form method="post" action="{{ route('blog.admin.categories.store') }}">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('blog.admin.category.includes.item_edit_main_col')
            </div>
            <div class="col-md-3">
                @include('blog.admin.category.includes.item_edit_add_col')
            </div>
        </div>
    </form>

@endsection
