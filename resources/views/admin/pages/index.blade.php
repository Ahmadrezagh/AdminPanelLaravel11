@extends('layouts.panel')
@section('content')


    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">صفحه ها</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">صفحه ها</li>
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
                    <button class="btn btn-primary mb-3"  data-toggle="modal" data-target="#modal-create">افزودن صفحه</button>
                    <x-modal.create id="modal-create" title="ساخت صفحه" action="{{route('pages.store')}}" class="modal-lg" >
                        <x-form.input title="عنوان"  name="title" />
                        <x-form.textarea name="content" title="محتوا" />
                        <x-form.select-option title="منتشر شود" name="published" >
                            <option value="0">خیر</option>
                            <option value="1">بله</option>
                        </x-form.select-option>
                    </x-modal.create>

                </div>
                <div class="card-body">
                    <div class="table-responsive" style="min-height: 500px">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr class="text-center">
                                <th class="wd-20p">نام</th>
                                <th class="wd-20p">لینک</th>
                                <th class="wd-20p">وضعیت</th>
                                <th class="wd-20p">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pages as $page)
                                <tr class="text-center">
                                    <td>{{$page->title}}</td>
                                    <td><x-form.copiable-component content="{{$page->url}}" /></td>
                                    <td>
                                        @if($page->published)
                                            <button class="btn btn-success">منتشر شده</button>
                                        @else
                                            <button class="btn btn-danger">منتشر نشده</button>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                عملیات
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-edit-{{$page->id}}">ویرایش</button>
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-destroy-{{$page->id}}">حذف</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $pages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->


    @foreach($pages as $page)
        <!-- Modal -->
        <x-modal.destroy id="modal-destroy-{{$page->id}}" title="حذف صفحه" action="{{route('pages.destroy', $page->slug)}}" title="{{$page->title}}" />
        <x-modal.update id="modal-edit-{{$page->id}}" title="ویرایش صفحه" action="{{route('pages.update',$page->slug)}}" class="modal-lg" >
            <x-form.input title="عنوان"  name="title" value="{{$page->title}}" />
            <x-form.textarea name="content" title="محتوا" :value="$page->content" />
            <x-form.select-option title="منتشر شود" name="published" >
                <option value="0" @if($page->published == 0) selected @endif >خیر</option>
                <option value="1" @if($page->published == 1) selected @endif >بله</option>
            </x-form.select-option>
        </x-modal.update>
    @endforeach


@endsection

