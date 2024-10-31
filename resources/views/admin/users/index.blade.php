@extends('layouts.panel')
@section('content')

    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-name tx-24 mg-b-5">کاربران</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">کاربران</li>
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
                    <button class="btn btn-primary mb-3"  data-toggle="modal" data-target="#modal-create">افزودن کاربر</button>

                    <x-modal.create id="modal-create" title="ساخت کاربر" action="{{route('users.store')}}" >
                        <x-form.input title="نام"  name="name" />
                        <x-form.file-input title="عکس" name="profile_image" />
                        <x-form.input title="ایمیل"  name="email" type="email" />
                        <x-form.input title="شماره تماس"  name="phone" type="tel" />
                        <x-form.input title="رمز عبور"  name="password" type="password" />
                        <x-form.input title="تکرار رمز عبور"  name="password_confirmation" type="password" />
                    </x-modal.create>

                </div>
                <div class="card-body">
                    <div class="table-responsive" style="min-height: 500px">
                        <table class="table table-bordered" id="example1">
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
                    <div class="d-flex justify-content-center mt-3">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    @foreach($users as $user)
        <x-modal.destroy id="modal-destroy-{{$user->id}}" title="حذف کاربر" action="{{route('users.destroy', $user->id)}}" title="{{$user->name}}" />
        <!-- Modal -->
        <x-modal.update id="modal-edit-{{$user->id}}" title="ویرایش کاربر" action="{{route('users.update', $user->id)}}" >
            <input type="hidden" name="id" value="{{$user->id}}">
            <x-form.input title="نام" :value="$user->name" name="name" />
            <x-form.file-input title="عکس" name="profile_image" />
            <x-form.input title="ایمیل" :value="$user->email" name="email" type="email" />
            <x-form.input title="شماره تماس" :value="$user->phone" name="phone" type="tel" />
            <x-form.input title="رمز عبور"  name="password" type="password" />
            <x-form.input title="تکرار رمز عبور"  name="password" type="password_confirmation" />
        </x-modal.update>
        <!-- /Modal -->
    @endforeach


@endsection
