

@foreach($items as $item)

        @if (!$item->hasChildren())
            @php $delete = '<a href="/category/delete?id=' . $item->id . '" class="delete"><i class="fa fa-fw fa-close text-danger"></i></a>'; @endphp
        @else
            @php $delete = '<i class="fa fa-fw fa-close"></i>' ;@endphp
        @endif

            <p class="item-p">
                <a class="list-group-item" href="{{ route('blog.admin.categories.edit',$item->id) }}">{{ $item->title }}</a>
                <span>@php echo $delete; @endphp</span>
            </p>

        @if($item->hasChildren())
                <div class="list-group">
                    @include(env('THEME').'blog.admin.menu.customMenuItems', ['items'=>$item->children()])
                </div>
        @endif

@endforeach



