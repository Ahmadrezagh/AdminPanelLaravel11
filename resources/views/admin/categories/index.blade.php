@extends('layouts.panel')
@section('content')

    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">


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

                                <!-- Modal -->
                                <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal-create">ساخت دسته بندی</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form action="{{route('categories.store')}}" method="post">
                                                <div class="modal-body">
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="">نام</label>
                                                        <input type="text" class="form-control" name="title">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">دسته بندی</label>
                                                        <select name="parent_id" class="form-control">

                                                            <option value="0" selected >انتخاب کنید</option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->title}}</option>
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

            </div>
        </div>
    </div>
    <!-- End Main Content-->

    @foreach($categories as $category)
        <!-- Modal -->
        <div class="modal fade" id="modal-destroy-{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-create">حذف دسته بندی</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{route('categories.destroy', $category->id)}}" method="post">
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
        <div class="modal fade" id="modal-edit-{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-create">ویرایش دسته بندی</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="{{route('categories.update', $category->id)}}" method="post">
                        <div class="modal-body">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">نام</label>
                                <input type="text" class="form-control" name="title" value="{{$category->title}}">
                            </div>

                            <div class="form-group">
                                <label for="">دسته بندی</label>
                                <select name="parent_id" class="form-control">
                                    <option value="0" selected >انتخاب کنید</option>
                                        @foreach($categories as $parent_category )
                                            @if(!($parent_category->isThisCategory($category)) && ($category->parentOfCategory($parent_category)))
                                                <option value="{{$parent_category->id}}" @if(@$category->parent_id == $parent_category->id) selected @endif>{{$parent_category->title}} </option>
                                            @endif
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
