<h1>
    @if (isset($title)){{$title}}@endif
</h1>
<ol class="breadcrumb">
    <li><a href="{{route('blog.admin.index.index')}}"><i class="fa fa-dashboard"></i>{{$parent}}</a></li>
    @if (isset($order))
        <li><a href="{{route('blog.admin.orders.index')}}"><i></i>{{$order}}</a></li>
    @endif
    @if (isset($category))
        <li><a href="{{route('blog.admin.categories.index')}}"><i></i>{{$category}}</a></li>
    @endif
    @if (isset($user))
        <li><a href="{{route('blog.admin.users.index')}}"><i></i>{{$user}}</a></li>
    @endif
    @if (isset($product))
        <li><a href="{{route('blog.admin.products.index')}}"><i></i>{{$product}}</a></li>
    @endif
    @if (isset($group_filter))
        <li><a href="{{url('/admin/filter/group-filter')}}"><i></i>{{$group_filter}}</a></li>
    @endif
    @if (isset($attrs_filter))
        <li><a href="{{url('/admin/filter/attributes-filter')}}"><i></i>{{$attrs_filter}}</a></li>
    @endif
    @if (isset($currency))
        <li><a href="{{url('/admin/currency/index')}}"><i></i>{{$currency}}</a></li>
    @endif
    <li><i class="active"></i>{{$active}}</li>
</ol>
