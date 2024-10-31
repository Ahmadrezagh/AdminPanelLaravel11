@extends('layouts.panel')
@section('content')


    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">نقش ها</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">نقش ها</li>
            </ol>
        </div>
        <div class="d-flex">
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-header">

                    <button class="btn btn-primary mb-3"  data-toggle="modal" data-target="#modal-create">افزودن نقش</button>
                    <x-modal.create id="modal-create" title="ساخت نقش" action="{{route('roles.store')}}" >
                        <x-form.input title="عنوان"  name="title" />
                        <div class="row">
                            @foreach($permissions as $permission)
                                <x-form.check-input col="col-6" :title="$permission->title" name="permissions[]" :value="$permission->id" id="create-{{$permission->id}}" />
                            @endforeach
                        </div>
                    </x-modal.create>

                </div>
                <div class="card-body">
                    <div class="table-responsive" style="min-height: 500px">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th class="wd-20p">نام</th>
                                <th class="wd-20p">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->title}}</td>
                                    <td>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                عملیات
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-edit-{{$role->id}}">ویرایش</button>
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-destroy-{{$role->id}}">حذف</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        {{ $roles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    @foreach($roles as $role)

         <x-modal.destroy id="modal-destroy-{{$role->id}}" title="حذف نقش" action="{{route('roles.destroy', $role->id)}}" title="{{$role->title}}" />

         <x-modal.update id="modal-edit-{{$role->id}}" title="ویرایش نقش" action="{{route('roles.update',$role->id)}}" >
             <x-form.input title="عنوان" value="{{$role->title}}"  name="title" />
             <div class="row">
                 @foreach($permissions as $permission)
                     <x-form.check-input col="col-6" :title="$permission->title" name="permissions[]" :value="$permission->id" id="edit-{{$role->id}}-{{$permission->id}}"  checked="{{$role->hasThisPermission($permission)}}" />
                 @endforeach
             </div>
         </x-modal.update>
     @endforeach


@endsection
