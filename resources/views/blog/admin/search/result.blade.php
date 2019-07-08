@extends('layouts.app_admin')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('parent') Главная @endslot
            @slot('active') Поиск по запросу @endslot
        @endcomponent
    </section>


    <!--prdt-starts-->
    <div class="prdt">
        <div class="container">
            <div class="prdt-top">
                <div class="col-md-9 prdt-left">

                    <div class="product-one">

                        <div class="col-md-4 product-left p-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="product/" class="mask"><img class="img-responsive zoom-img" src="/images/" alt="" /></a>
                                <div class="product-bottom">
                                    <a href="product/" class="mask"><h3></h3></a>
                                    <p>Explore Now</p>
                                    <h4>
                                        <a data-id="" class="add-to-cart-link" href="cart/add?id="><i></i></a> <span class=" item_price"></span>

                                        <small><del></del></small>

                                    </h4>
                                </div>
                                <div class="srch srch1">
                                    <span>-50%</span>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--product-end-->





@endsection
