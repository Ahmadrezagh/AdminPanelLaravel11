@extends('layouts.panel')
@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-name tx-24 mg-b-5">مدیران</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">مدیران</li>
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
                    <button class="btn btn-primary mb-3"  data-toggle="modal" data-target="#modal-create">افزودن مدیر</button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-name" id="modal-create">ساخت مدیر</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="{{route('admins.store')}}" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        @csrf

                                        <div class="form-group">
                                            <label for="">نام</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">عکس</label>
                                            <div class="custom-file">
                                                <input type="file" name="profile_image" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">ایمیل</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="">شماره تماس</label>
                                            <input type="number" class="form-control" name="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="">رمزعبور</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="">تکرار رمزعبور</label>
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>
                                        <div class="form-group">
                                            <label for="">نقش</label>
                                            <select name="roles" class="form-control">

                                                <option value="0" selected >انتخاب کنید</option>
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->title}}</option>
                                                @endforeach
                                            </select>
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
                                <th class="wd-20p">تصویر پروفایل</th>
                                <th class="wd-20p">نام</th>
                                <th class="wd-20p">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <img src="{{$user->profile_image}}" style="width: 100px; height: 100px; border-radius: 50%">
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                عملیات
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-edit-{{$user->id}}">ویرایش</button>
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-destroy-{{$user->id}}">حذف</button>
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


    @foreach($users as $user)
        <!-- Modal -->
        <div class="modal fade" id="modal-destroy-{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-name" id="modal-create">حذف مدیر</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{route('admins.destroy', $user->id)}}" method="post">
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
        <div class="modal fade" id="modal-edit-{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-name" id="modal-create">ویرایش مدیر</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{route('admins.update', $user->id)}}" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                                @method('PUT')
                            <input type="hidden" name="id" value="{{$user->id}}">

                            <div class="form-group">
                                <label for="">نام</label>
                                <input value="{{$user->name}}" type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">عکس</label>
                                <div class="custom-file">
                                    <input type="file" name="profile_image" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">ایمیل</label>
                                <input value="{{$user->email}}" type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="">شماره تماس</label>
                                <input value="{{$user->phone}}" type="number" class="form-control" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="">رمزعبور</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="">تکرار رمزعبور</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>

                            <div class="form-group">
                                <label for="">نقش</label>
                                <select name="roles" class="form-control">
                                    <option value="0" selected >انتخاب کنید</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}" @if($user->hasRole($role)) selected @endif >{{$role->title}}</option>
                                    @endforeach
                                </select>
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
