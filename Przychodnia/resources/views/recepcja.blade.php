<select name = "" id = "">
    @foreach ($data as $item)
        <option value="{{$item ->id}}">{{$item->firstNAME}}</option>

    @endforeach
</select>
