@props([
'id' => '',
'title' => $title,
'name' => $name,
'col' => '',
'multiple' => ''
])
<div class="form-group {{$col}}">
    <label for="">{{$title}}</label>
    <select name="{{$name}}" class="form-control s2" style="width: 100%" @if($multiple) multiple @endif >
        @if(!$multiple)
            <option value="0">انتخاب کنید</option>
        @endif
        {{ $slot }}
    </select>
</div>
