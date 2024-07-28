@props([
'id' => $id,
'title' => $title,
'action' => $action,
'title' => $title
])
<x-modal.modal id="{{$id}}" title="{{$title}}">
    <form action="{{$action}}" method="post">
        <div class="modal-body">
            @csrf
            @method('DELETE')
            <h5>
                آیا در حذف '<b>{{$title}}</b>' مطمئن هستید؟</h5>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">حذف</button>
        </div>
    </form>
</x-modal.modal>
