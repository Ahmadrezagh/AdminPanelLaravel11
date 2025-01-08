@props([
'id' => '',
'title' => $title,
'name' => $name,
'value' => '',
'class' => '',
'col' => '',
])
<div class="form-group {{$col}}">
    <label for="">{{$title}}</label>
    <textarea name="{{$name}}" id="{{$id}}" class="form-control {{$class}} ">{{$value}}</textarea>
</div>
