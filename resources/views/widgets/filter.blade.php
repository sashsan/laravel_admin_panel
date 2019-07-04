<div class="nav-tabs-custom" id="filter">

    <ul class="nav nav-tabs">
        @php $i = 1; @endphp

        @foreach($groups as $group_id => $group_item)

            <li class="@if($i == 1) active @endif "><a href="#tab_@php echo $group_id; @endphp" data-toggle="tab" aria-expanded="true">@php echo $group_item; @endphp</a>
            </li>

            @php $i++; @endphp
        @endforeach

        <li class="pull-right">
            <a href="#" id="reset-filter">Сброс</a>
        </li>
    </ul>

    <div class="tab-content">
        @if (!empty($attrs[$group_id]))
            @php $i = 1; @endphp

            @foreach($groups as $group_id => $group_item)

                <div class="tab-pane @if($i == 1) active @endif" id="tab_@php echo $group_id; @endphp">
                    @foreach($attrs[$group_id] as $attr_id => $value)

                        @if(!empty($filter) && in_array($attr_id, $filter))
                            @php $checked = ' checked'; @endphp
                        @else
                            @php  $checked = null; @endphp
                        @endif

                        <div class="form-group">
                            <label>
                                <input type="radio" name="attrs[@php echo $group_id; @endphp]"
                                       value="@php echo $attr_id; @endphp" @php echo $checked; @endphp> @php echo $value; @endphp
                            </label>
                        </div>
                        @php $i++; @endphp
                    @endforeach
                </div>

            @endforeach
        @endif

    </div>

</div>
