<div class="form-group">

    <label for="parent_id">Родительская категория</label>

    <select name="parent_id"
            id="parent_id"
            class="form-control"
            required>


        <option value='0'> Самостоятельная категория </option>

        @foreach($categoryList as $categoryOption)

            <option value="{{$categoryOption->id}}">
                {{$categoryOption->combo_title}}
            </option>

        @endforeach

    </select>
</div>
