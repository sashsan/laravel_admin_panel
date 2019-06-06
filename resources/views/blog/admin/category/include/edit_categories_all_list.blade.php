
    @foreach($categories as $category_list)
            <option value="{{$category_list->id ?? ""}}"
                @isset($item->id)
                    @if($category_list->id == $item->parent_id) selected
                    @endif
                    @if ($item->id == $category_list->id) disabled
                    @endif
                @endisset
            >
                {!! $delimiter ?? ""!!} {{$category_list->title ?? ""}}

            </option>

        @if (count($category_list->children) > 0)
            @include('blog.admin.category.include.edit_categories_all_list',
            [
                'categories' => $category_list->children,
                'delimiter' => ' - ' . $delimiter,
            ])
        @endif

    @endforeach



