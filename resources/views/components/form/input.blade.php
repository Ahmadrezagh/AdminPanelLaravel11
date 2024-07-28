@props([
'id' => '',
'title' => $title,
'name' => $name,
'value' => '',
'class' => '',
'type' => 'text',
'col' => '',
])
<div class="form-group {{$col}}">
    <label for="">{{$title}}</label>
    <input value="{{$value}}" type="{{$type}}" class="form-control {{$class}}" name="{{$name}}">
</div>
