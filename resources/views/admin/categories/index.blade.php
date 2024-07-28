@extends('layouts.panel')
@section('content')


    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">دسته بندی ها</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">دسته بندی ها</li>
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
                    <button class="btn btn-primary mb-3"  data-toggle="modal" data-target="#modal-create">افزودن دسته بندی</button>

                    <x-modal.create id="modal-create" title="ساخت دسته بندی" action="{{route('categories.store')}}" >
                        <x-form.input title="نام"  name="title" />
                        <x-form.select-option title="دسته بندی والد" name="parent_id" >
                            @foreach($categories as $parent_category)
                                <option value="{{$parent_category->id}}">{{$parent_category->title}}</option>
                            @endforeach
                        </x-form.select-option>
                    </x-modal.create>

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
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->title}}</td>
                                    <td>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                عملیات
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-edit-{{$category->id}}">ویرایش</button>
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-destroy-{{$category->id}}">حذف</button>
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


    @foreach($categories as $category)
        <!-- Modal -->
        <x-modal.destroy id="modal-destroy-{{$category->id}}" title="حذف دسته بندی" action="{{route('categories.destroy', $category->id)}}" title="{{$category->title}}" />

        <x-modal.update id="modal-edit-{{$category->id}}" title="ساخت دسته بندی" action="{{route('categories.update',$category->id)}}" >
            <x-form.input title="نام"  name="title" :value="$category->title" />
            <x-form.select-option title="دسته بندی والد" name="parent_id" >
                @foreach($categories as $parent_category)
                    @if( ($parent_category->id != $category->id) && (!$category->isParentOfCategory($parent_category) ))
                    <option value="{{$category->id}}" @if($category->parent_id == $parent_category->id) selected @endif >{{$parent_category->title}}</option>
                    @endif
                @endforeach
            </x-form.select-option>
        </x-modal.update>
    @endforeach


@endsection
