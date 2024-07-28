@props([
'id' => $id,
'title' => $title,
'action' => $action,
])
<x-modal.modal id="{{$id}}" title="{{$title}}">
    <form action="{{$action}}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            {{ $slot }}

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">ایجاد</button>
        </div>
    </form>
</x-modal.modal>
