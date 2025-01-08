@props(['content' => $content])
<div class="form-group row">
    <div class="col-sm-8">
        <input type="text" class="form-control copy-input" value="{{$content}}" >
    </div>
    <div class="col-sm-2">
        <button class="btn btn-primary copy-btn">کپی</button>
    </div>
</div>