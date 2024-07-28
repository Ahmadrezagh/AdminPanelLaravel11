@props([
'id' => '',
'title' => $title,
'name' => $name,
'col' => '',
])
<div class="form-group {{$col}}">
    <label for="">{{$title}}</label>
    <div class="custom-file text-left">
        <input type="file" name="{{$name}}" class="custom-file-input" id="{{$id}}">
        <label class="custom-file-label" for="{{$id}}"></label>
    </div>
</div>
