
<!-- TABLE: LATEST ORDERS -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Последние заказы</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Покупатель</th>
                    <th>Статус</th>
                    <th>Сумма</th>
                </tr>
                </thead>
                <tbody>
                @foreach($last_orders as $order)
                    <tr>
                        <td><a href="{{route('blog.admin.orders.edit',$order->id)}}">{{$order->id}}</a></td>
                        <td><a href="{{route('blog.admin.orders.edit',$order->id)}}">{{ucfirst($order->name)}}</a></td>
                        <td><span class="label label-success">
                                 @if ($order->status == 0)Новый@endif
                                @if ($order->status == 1)Завершен@endif
                                @if ($order->status == 2)<b style="color: red">Удален</b>@endif
                            </span></td>
                        <td>
                            <div class="sparkbar" data-color="#00a65a" data-height="20">{{$order->sum}}</div>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <br>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
        <a href="{{route('blog.admin.orders.index')}}" class="btn btn-sm btn-info btn-flat pull-left">Все заказы</a>
    </div>
    <!-- /.box-footer -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->

