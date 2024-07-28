@props([
'id' => '',
'title' => $title,
'name' => $name,
'value' => '',
'class' => '',
'col' => '',
'checked' => '',
])
<div class="form-check {{$col}}" >
    <input class="form-check-input {{$class}}" type="checkbox" style="border: 100px"
           name="{{$name}}" value="{{$value}}" id="id-{{$id}}" @if($checked) checked @endif >
    <label class="form-check-label mx-3" for="id-{{$id}}">
        {{ $title }}
    </label>
</div>
