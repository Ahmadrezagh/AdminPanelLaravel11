@extends('layouts.panel')
@section('content')


    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-name tx-24 mg-b-5">تنظیمات</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">تنظیمات</li>
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
                    <h5>
                        {{$setting_group->title}}
                    </h5>
                </div>
                <form action="{{ route('setting_group.settings.store', $setting_group->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        @foreach($setting_group->settings as $setting)
                            <div class="form-group">
                                <label>
                                    {{ $setting->title }}
                                </label>
                                @if($setting->type == 'string')
                                    <input class="form-control" name="settings[{{$setting->key}}]" type="text" value="{{ $setting->value }}">

                                @elseif($setting->type == 'numeric')
                                    <input class="form-control" name="settings[{{$setting->key}}]" type="number" value="{{ $setting->value }}">

                                @elseif($setting->type == 'email')
                                    <input class="form-control" name="settings[{{$setting->key}}]" type="email" value="{{ $setting->value }}">

                                @elseif($setting->type == 'tel')
                                    <input class="form-control" name="settings[{{$setting->key}}]" type="tel" value="{{ $setting->value }}">

                                @elseif($setting->type == 'textarea')
                                    <textarea name="settings[{{$setting->key}}]" class="form-control" >{{ $setting->value }}</textarea>

                                @elseif($setting->type == 'file')
                                    <div class="custom-file">
                                        <input type="file" name="settings[{{$setting->key}}]" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                @endif

                            </div>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">
                            ویرایش
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection
