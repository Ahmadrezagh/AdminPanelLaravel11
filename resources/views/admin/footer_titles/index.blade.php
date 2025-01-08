@extends('layouts.panel')
@section('content')


    <!-- footer_title Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">ستون های فوتر</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="footer_title">ستون های فوتر</li>
            </ol>
        </div>
        <div class="d-flex">
        </div>
    </div>
    <!-- End footer_title Header -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-header">
                    @if(App\Models\FooterTitle::query()->count() < 3)
                        <button class="btn btn-primary mb-3"  data-toggle="modal" data-target="#modal-create">افزودن ستون فوتر</button>
                        <x-modal.create id="modal-create" title="ساخت ستون فوتر" action="{{route('footer_titles.store')}}" class="modal-lg" >
                            <x-form.input title="عنوان"  name="title" />
                        </x-modal.create>
                    @endif

                </div>
                <div class="card-body">
                    <div class="table-responsive" style="min-height: 500px">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr class="text-center">
                                <th class="wd-20p">نام</th>
{{--                                <th class="wd-20p">ستون فوتر</th>--}}
                                <th class="wd-20p">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($footer_titles as $footer_title)
                                <tr class="text-center">
                                    <td>{{$footer_title->title}}</td>
                                    <td>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                عملیات
                                            </button>
                                            <div class="dropdown-menu">
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-edit-{{$footer_title->id}}">ویرایش</button>
                                                <a href="{{route('footer_title.footer_title_links.index',$footer_title->id)}}" class="dropdown-item">لینک ها</a>
                                                <button class="dropdown-item" data-toggle="modal" data-target="#modal-destroy-{{$footer_title->id}}">حذف</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $footer_titles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->


    @foreach($footer_titles as $footer_title)
        <!-- Modal -->
        <x-modal.destroy id="modal-destroy-{{$footer_title->id}}" title="حذف ستون فوتر" action="{{route('footer_titles.destroy', $footer_title->id)}}" title="{{$footer_title->title}}" />
        <x-modal.update id="modal-edit-{{$footer_title->id}}" title="ویرایش ستون فوتر" action="{{route('footer_titles.update',$footer_title->id)}}" class="modal-lg" >
            <x-form.input title="عنوان"  name="title" value="{{$footer_title->title}}" />
        </x-modal.update>
    @endforeach


@endsection

