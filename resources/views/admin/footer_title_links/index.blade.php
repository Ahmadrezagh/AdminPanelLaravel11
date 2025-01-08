@extends('layouts.panel')
@section('content')


    <!-- footer_title_link Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">لینک ها</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="footer_title_link">لینک ها</li>
            </ol>
        </div>
        <div class="d-flex">
        </div>
    </div>
    <!-- End footer_title_link Header -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-header">
                    <button class="btn btn-primary mb-3"  data-toggle="modal" data-target="#modal-create">افزودن لینک</button>
                    <x-modal.create id="modal-create" title="ساخت لینک" action="{{route('footer_title.footer_title_links.store',$footer_title->id)}}" class="modal-lg" >
                        <x-form.input title="عنوان"  name="title" />
                        <x-form.input title="لینک"  name="url" />
                    </x-modal.create>

                </div>
                <div class="card-body">
                    <div class="table-responsive" style="min-height: 500px">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr class="text-center">
                                <th class="wd-20p">نام</th>
                                <th class="wd-20p">لینک</th>
                                <th class="wd-20p">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($footer_title_links as $footer_title_link)
                                <tr class="text-center">
                                    <td>{{$footer_title_link->title}}</td>
                                    <td><x-form.copiable-component content="{{$footer_title_link->url}}" /></td>
                                    <td>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                عملیات
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-edit-{{$footer_title_link->id}}">ویرایش</button>
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-destroy-{{$footer_title_link->id}}">حذف</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $footer_title_links->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->


    @foreach($footer_title_links as $footer_title_link)
        <!-- Modal -->
        <x-modal.destroy id="modal-destroy-{{$footer_title_link->id}}" title="حذف لینک" action="{{route('footer_title.footer_title_links.destroy', ['footer_title' => $footer_title->id,'footer_title_link' => $footer_title_link->id])}}" title="{{$footer_title_link->title}}" />
        <x-modal.update id="modal-edit-{{$footer_title_link->id}}" title="ویرایش لینک" action="{{route('footer_title.footer_title_links.update',['footer_title' => $footer_title->id,'footer_title_link' => $footer_title_link->id])}}" class="modal-lg" >
            <x-form.input title="عنوان"  name="title" value="{{$footer_title_link->title}}" />
            <x-form.input title="لینک"  name="url" value="{{$footer_title_link->url}}" />
        </x-modal.update>
    @endforeach


@endsection

