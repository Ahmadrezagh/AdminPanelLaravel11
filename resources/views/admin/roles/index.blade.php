@extends('layouts.panel')
@section('content')

    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">


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

                                <!-- Modal -->
                                <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-create">ساخت نقش</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form action="{{route('roles.store')}}" method="post">
                                                <div class="modal-body">
                                                        @csrf

                                                        <div class="form-group">
                                                            <label for="">نام</label>
                                                            <input type="text" class="form-control" name="title">
                                                        </div>
                                                        <div class="row">
                                                            @foreach($permissions as $permission)
                                                                <div class="form-check col-6">
                                                                    <input class="form-check-input " type="checkbox" style="border: 100px"
                                                                           name="permissions[]" value="{{ $permission->id }}" id="defaultCheck{{ $permission->id }}">
                                                                    <label class="form-check-label mx-3" for="defaultCheck{{ $permission->id }}">
                                                                        {{ $permission->title }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">ایجاد</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Modal -->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive" style="min-height: 500px">
                                    <table class="table" id="example1">
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

            </div>
        </div>
    </div>
    <!-- End Main Content-->

    @foreach($roles as $role)
         <!-- Modal -->
         <div class="modal fade" id="modal-destroy-{{$role->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="modal-create">حذف نقش</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>

                     <form action="{{route('roles.destroy', $role->id)}}" method="post">
                         <div class="modal-body">
                             @csrf
                             @method('DELETE')
                         </div>
                         <div class="modal-footer">
                             <button type="submit" class="btn btn-primary">حذف</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
         <!-- /Modal -->
         <!-- Modal -->
         <div class="modal fade" id="modal-edit-{{$role->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="modal-create">ویرایش نقش</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>

                     <form action="{{route('roles.update', $role->id)}}" method="post">
                         <div class="modal-body">
                             @csrf
                                @method('PUT')
                             <div class="form-group">
                                 <label for="">نام</label>
                                 <input type="text" class="form-control" name="title" value="{{$role->title}}">
                             </div>
                             <div class="row">
                                 @foreach($permissions as $permission)
                                     <div class="form-check col-6">
                                         <input class="form-check-input " type="checkbox"
                                                name="permissions[]" @if($role->hasThisPermission($permission)) checked @endif value="{{$permission->id}}" id="defaultCheck{{$permission->id}}-{{$role->id}}">

                                         <label class="form-check-label px-4" for="defaultCheck{{$permission->id}}-{{$role->id}}">
                                             {{$permission->title}}
                                         </label>

                                     </div>
                                 @endforeach
                             </div>

                         </div>
                         <div class="modal-footer">
                             <button type="submit" class="btn btn-primary">ویرایش</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
         <!-- /Modal -->
     @endforeach


@endsection
