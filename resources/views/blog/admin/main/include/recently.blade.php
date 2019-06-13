
<div class="col-md-6">

    <!-- PRODUCT LIST -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Последние добавленные продукты</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>


        <!-- /.box-header -->
        <div class="box-body">
            <ul class="products-list product-list-in-box">

                @foreach($last_products as $product)

                <li class="item">
                    <div class="product-img">
                        <img src="#" alt="Product Image">
                    </div>
                    <div class="product-info">
                        <a href="{{route('blog.admin.posts.edit', $product->id)}}" class="product-title">{{$product->title}}
                            <span class="label label-warning pull-right">{{$product->price}}$</span></a>
                        <span class="product-description">{{$product->description}}</span>
                    </div>
                </li>
                <!-- /.item -->

                @endforeach

            </ul>
        </div>
        <!-- /.box-body -->
        <div class="text-center">

            @if ($last_products->total() > $last_products->count())
                <div class="row justify-content-center">
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                {{$last_products->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>

        <div class="box-footer text-center">
            <a href="{{route('blog.admin.products.index')}}" class="uppercase">Все продукты</a>
        </div>
        <!-- /.box-footer -->
    </div>
</div>
