@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        {{--@if(Auth::user()->isDisabled())--}}
                            {{--You are not Active--}}
                        {{--@elseif(Auth::user()->isVisitor())--}}
                            {{--Welcome to example.com--}}
                        {{--@elseif(Auth::user()->isAdmin())--}}
                            {{--Welcome Admindd--}}
                        {{--@endif--}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
