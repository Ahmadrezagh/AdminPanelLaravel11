<!DOCTYPE html>
<html lang="en" dir="rtl" >

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha -  Admin Panel laravel Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin laravel template, template laravel admin, laravel css template, best admin template for laravel, laravel blade admin template, template admin laravel, laravel admin template bootstrap 4, laravel bootstrap 4 admin template, laravel admin bootstrap 4, admin template bootstrap 4 laravel, bootstrap 4 laravel admin template, bootstrap 4 admin template laravel, laravel bootstrap 4 template, bootstrap blade template, laravel bootstrap admin template">

    <!-- Favicon -->
    <link rel="icon" href="{{url('dashboard/assets/img/brand/favicon.ico')}}" type="image/x-icon"/>

    <!-- Title -->
    <title>داشبورد</title>

    <!-- Bootstrap css-->
    <link href="{{url('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- Icons css-->
    <link href="{{url('dashboard/assets/plugins/web-fonts/icons.css')}}" rel="stylesheet"/>
    <link href="{{url('dashboard/assets/plugins/web-fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('dashboard/assets/plugins/web-fonts/plugin.css')}}" rel="stylesheet"/>

    <!-- Style css-->
    <link href="{{url('dashboard/assets/css-rtl/style/style.css')}}" rel="stylesheet">
    <link href="{{url('dashboard/assets/css-rtl/skins.css')}}" rel="stylesheet">
    <link href="{{url('dashboard/assets/css-rtl/dark-style.css')}}" rel="stylesheet">
    <link href="{{url('dashboard/assets/css-rtl/colors/default.css')}}" rel="stylesheet">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{url('dashboard/assets/css-rtl/colors/color.css')}}">

    <!-- Select2 css -->
    <link href="{{url('dashboard/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="{{url('dashboard/assets/plugins/multipleselect/multiple-select.css')}}">

    <!-- Sidemenu css-->
    <link href="{{url('dashboard/assets/css-rtl/sidemenu/sidemenu.css')}}" rel="stylesheet">

    <!-- Switcher css-->
    <link href="{{url('dashboard/assets/switcher/css/switcher-rtl.css')}}" rel="stylesheet">
    <link href="{{url('dashboard/assets/switcher/demo.css')}}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">



</head>


<body class="main-body leftmenu">

<!-- Switcher -->
<div class="switcher-wrapper">
    <div class="demo_changer">
        <div class="demo-icon bg_dark">
            <i class="fa fa-cog fa-spin  text_primary"></i>
        </div>
        <div class="form_holder sidebar-right1">
            <div class="row">
                <div class="predefined_styles">
                    <div class="swichermainleft text-center">
                        <div class="p-3">
                            <a href="index.html" class="btn btn-primary btn-block mt-0">مشاهده نسخه نمایشی </a>
                            <a href="https://www.rtl-theme.com/category/template-html/admin-templates/" class="btn btn-secondary btn-block">خرید </a>
                            <a href="https://www.rtl-theme.com/author/amir-h67/" class="btn btn-info btn-block">نمونه کارها   </a>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>سبک پیمایش</h4>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary btn-block mt-0">راستچین </a>
                            <a href="horizontal.html" class="btn btn-success btn-block">چپ چین</a>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>سبک های چیدمان</h4>
                        <div class="p-3">
                            <a href="index.html" class="btn btn-primary btn-block mt-0">منوی راست  </a>
                            <a href="horizontal.html" class="btn btn-success btn-block">افقی</a>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4 class="font-bold text-sm mr-3">تعویض کننده تم پیش فرض</h4>
                        <div class="swichermainleft my-4">
                            <a class="wscolorcode red-btn color blackborder color1" href="#" data-theme="assets/css-rtl/colors/color1.css"></a>
                            <a class="wscolorcode purple-btn color blackborder color2" href="#" data-theme="assets/css-rtl/colors/color2.css"></a>
                            <a class="wscolorcode green-btn color blackborder color3" href="#" data-theme="assets/css-rtl/colors/color3.css"></a>
                            <a class="wscolorcode pink-btn color blackborder color4" href="#" data-theme="assets/css-rtl/colors/color4.css"></a>
                            <a class="wscolorcode orange-btn color blackborder color5" href="#" data-theme="assets/css-rtl/colors/color5.css"></a>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>سبک های یونی</h4>
                        <div class="switch_section my-2">
                            <div class="switch-toggle d-flex">
                                <span class="ml-auto">سبک نماد</span>
                                <div class="onoffswitch2">
                                    <input type="checkbox" name="onoffswitch2" id="myonoffswitch51" class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch51" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                        </div>
                        <div class="switch_section my-2">
                            <div class="switch-toggle d-flex">
                                <span class="ml-auto">سبک تم</span>
                                <div class="onoffswitch2">
                                    <input type="checkbox" name="onoffswitch2" id="myonoffswitch52" class="onoffswitch2-checkbox">
                                    <label for="myonoffswitch52" class="onoffswitch2-label"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>طرح زمینه</h4>
                        <div class="switch_section d-flex my-4">
                            <div class="d-block text-center mx-auto">
                                <button type="button" id="background5" class="bg5 mb-3 wscolorcode1 blackborder"></button>
                                <span class="badge badge-light tx-12">طرح بندی تیره</span>
                            </div>
                            <div class="d-block text-center mx-auto">
                                <button type="button" id="background6" class="bg6 mb-3 wscolorcode1 blackborder"></button>
                                <span class="badge badge-light tx-12">چیدمان نور</span>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>حالت سبک هدر</h4>
                        <div class="switch_section d-flex my-4">
                            <div class="d-block text-center mx-auto">
                                <button type="button" id="background3" class="bg3 mb-3 wscolorcode1 blackborder"></button>
                                <span class="badge badge-light tx-12">سربرگ تیره</span>
                            </div>
                            <div class="d-block text-center mx-auto">
                                <button type="button" id="background4" class="bg4 mb-3 wscolorcode1 blackborder"></button>
                                <span class="badge badge-light tx-12">سربرگ رنگی</span>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>حالت سبک های چپ منو</h4>
                        <div class="switch_section d-flex my-4">
                            <div class="d-block text-center mx-auto">
                                <button type="button" id="background1" class="bg1 wscolorcode1 blackborder"></button>
                                <span class="badge badge-light tx-12">منوی رنگی</span>
                            </div>
                            <div class="d-block text-center mx-auto">
                                <button type="button" id="background2" class="bg2 wscolorcode1 blackborder"></button>
                                <span class="badge badge-light tx-12">منوی سبک</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->

<!-- Page -->
<div class="page">

    <!-- Sidemenu -->
    <div class="main-sidebar main-sidebar-sticky side-menu">
        <div class="sidemenu-logo">
            <a class="main-logo" href="index.html">
                <img src="assets/img/brand/logo-light.png" class="header-brand-img desktop-logo" alt="لوگو">
                <img src="assets/img/brand/icon-light.png" class="header-brand-img icon-logo" alt="لوگو">
                <img src="assets/img/brand/logo.png" class="header-brand-img desktop-logo theme-logo" alt="لوگو">
                <img src="assets/img/brand/icon.png" class="header-brand-img icon-logo theme-logo" alt="لوگو">
            </a>
        </div>
        <div class="main-sidebar-body">
            <ul class="nav">
                <li class="nav-header"><span class="nav-label">داشبورد</span></li>

                @if(auth()->user()->isSuperadmin() || (auth()->user()->isAdmin() && auth()->user()->can('home')) )
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-home sidemenu-icon"></i>
                            <span class="sidemenu-label">خانه</span>
                        </a>
                    </li>
                @endif

                @if(auth()->user()->isSuperadmin() || (auth()->user()->isAdmin() && (auth()->user()->can('admin') || auth()->user()->can('user') || auth()->user()->can('role'))) )
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#">
                            <span class="shape1"></span><span class="shape2"></span>
                            <i class="ti-agenda sidemenu-icon"></i>
                            <span class="sidemenu-label">کاربران</span>
                            <i class="angle fe fe-chevron-left"></i>
                        </a>
                        <ul class="nav-sub">
                             @if(auth()->user()->isSuperadmin() || (auth()->user()->isAdmin() && (auth()->user()->can('user'))))
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{route('users.index')}}">کاربران</a>
                                </li>
                             @endif


                             @if(auth()->user()->isSuperadmin() || (auth()->user()->isAdmin() && auth()->user()->can('admin')) )
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{route('admins.index')}}">مدیران</a>
                                    </li>
                             @endif

                             @if(auth()->user()->isSuperadmin() || (auth()->user()->isAdmin() && auth()->user()->can('role')) )
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="{{route('roles.index')}}">نقش ها</a>
                                    </li>
                             @endif
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->isSuperadmin() || (auth()->user()->isAdmin() && (auth()->user()->can('setting'))))
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#">
                            <span class="shape1"></span><span class="shape2"></span>
                            <i class="ti-agenda sidemenu-icon"></i>
                            <span class="sidemenu-label">تنظیمات</span>
                            <i class="angle fe fe-chevron-left"></i>
                        </a>
                        <ul class="nav-sub">
                            @foreach(\App\Models\SettingGroup::all() as $setting_group)
                                <li class="nav-sub-item">
                                    <a class="nav-sub-link" href="{{route('setting_group.settings.index', $setting_group->id)}}">{{$setting_group->title}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                @endif



                @if(auth()->user()->isSuperadmin() || (auth()->user()->isAdmin() && auth()->user()->can('category')) )
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories.index')}}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fas fa-home sidemenu-icon"></i>
                            <span class="sidemenu-label">دسته بندی ها</span>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" style="width:100%" type="submit">خروج</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Sidemenu -->		<!-- Main Header-->
    <div class="main-header side-header sticky">
        <div class="container-fluid">
            <div class="main-header-right">
                <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
            </div>
            <div class="main-header-center">
                <div class="responsive-logo">
                    <a href="index.html"><img src="assets/img/brand/logo.png" class="mobile-logo" alt="لوگو"></a>
                    <a href="index.html"><img src="assets/img/brand/logo-light.png" class="mobile-logo-dark" alt="لوگو"></a>
                </div>
                <div class="input-group">
                    <div class="input-group-btn search-panel">
                        <select class="form-control select2-no-search">
                            <option label="دسته بندی ها">
                            </option>
                            <option value="IT Projects">
                                پروژه های IT
                            </option>
                            <option value="Business Case">
                                مورد تجاری
                            </option>
                            <option value="Microsoft Project">
                                پروژه مایکروسافت
                            </option>
                            <option value="Risk Management">
                                مدیریت ریسک
                            </option>
                            <option value="Team Building">
                                تیم سازی
                            </option>
                        </select>
                    </div>
                    <input type="search" class="form-control" placeholder="هر چیزی را جستجو کنید ...">
                    <button class="btn search-btn"><i class="fe fe-search"></i></button>
                </div>
            </div>
            <div class="main-header-right">
                <div class="dropdown header-search">
                    <a class="nav-link icon header-search">
                        <i class="fe fe-search header-icons"></i>
                    </a>
                    <div class="dropdown-menu">
                        <div class="main-form-search p-2">
                            <div class="input-group">
                                <div class="input-group-btn search-panel">
                                    <select class="form-control select2-no-search">
                                        <option label="دسته بندی ها">
                                        </option>
                                        <option value="IT Projects">
                                            پروژه های IT
                                        </option>
                                        <option value="Business Case">
                                            مورد تجاری
                                        </option>
                                        <option value="Microsoft Project">
                                            پروژه مایکروسافت
                                        </option>
                                        <option value="Risk Management">
                                            مدیریت ریسک
                                        </option>
                                        <option value="Team Building">
                                            تیم سازی
                                        </option>
                                    </select>
                                </div>
                                <input type="search" class="form-control" placeholder="هر چیزی را جستجو کنید ...">
                                <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown main-header-notification flag-dropdown">
                    <a class="nav-link icon country-Flag">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"></circle><g fill="#0052b4"><path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"></path></g><g fill="#d80027"><path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"></path><path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"></path></g></svg>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item d-flex ">
                            <span class="avatar  ml-3 align-self-center bg-transparent"><img src="assets/img/flags/french_flag.jpg" alt="img"></span>
                            <div class="d-flex">
                                <span class="mt-2">فرانسوی</span>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex">
                            <span class="avatar  ml-3 align-self-center bg-transparent"><img src="assets/img/flags/germany_flag.jpg" alt="img"></span>
                            <div class="d-flex">
                                <span class="mt-2">آلمان</span>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex">
                            <span class="avatar ml-3 align-self-center bg-transparent"><img src="assets/img/flags/italy_flag.jpg" alt="img"></span>
                            <div class="d-flex">
                                <span class="mt-2">ایتالیا</span>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex">
                            <span class="avatar ml-3 align-self-center bg-transparent"><img src="assets/img/flags/russia_flag.jpg" alt="img"></span>
                            <div class="d-flex">
                                <span class="mt-2">روسیه</span>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex">
                            <span class="avatar  ml-3 align-self-center bg-transparent"><img src="assets/img/flags/spain_flag.jpg" alt="img"></span>
                            <div class="d-flex">
                                <span class="mt-2">اسپانیا</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="dropdown d-md-flex">
                    <a class="nav-link icon full-screen-link" href="#">
                        <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                        <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                    </a>
                </div>
                <div class="dropdown main-header-notification">
                    <a class="nav-link icon" href="#">
                        <i class="fe fe-bell header-icons"></i>
                        <span class="badge badge-danger nav-link-badge">4</span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="header-navheading">
                            <p class="main-notification-text">شما 1 اعلان خوانده نشده <span class="badge badge-pill badge-primary mr-3">مشاهده همه</span></p>
                        </div>
                        <div class="main-notification-list">
                            <div class="media new">
                                <div class="main-img-user online"><img alt="آواتار" src="assets/img/users/5.jpg"></div>
                                <div class="media-body">
                                    <p>به <strong>اولیویا جیمز</strong> برای شروع الگوی جدید تبریک می گوییم</p><span>15 بهمن  12:32 بعد از ظهر</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user"><img alt="آواتار" src="assets/img/users/2.jpg"></div>
                                <div class="media-body">
                                    <p><strong></strong>پیام جدید <strong>جوشوا گری</strong> دریافت شد</p><span>13 بهمن   02:56 صبح</span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="main-img-user online"><img alt="آواتار" src="assets/img/users/3.jpg"></div>
                                <div class="media-body">
                                    <p><strong>الیزابت لوئیس</strong> برنامه جدیدی را به فروش مجدد اضافه کرد</p><span>12 بهمن  10:40 بعد از ظهر</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">مشاهده همه اعلان ها</a>
                        </div>
                    </div>
                </div>
                <div class="main-header-notification">
                    <a class="nav-link icon" href="chat.html">
                        <i class="fe fe-message-square header-icons"></i>
                        <span class="badge badge-success nav-link-badge">6</span>
                    </a>
                </div>
                <div class="dropdown main-profile-menu">
                    <a class="d-flex" href="#">
                        <span class="main-img-user"><img alt="آواتار" src="assets/img/users/1.jpg"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="header-navheading">
                            <h6 class="main-notification-title">سونیا تیلور</h6>
                            <p class="main-notification-text">طراح وب</p>
                        </div>
                        <a class="dropdown-item border-top" href="profile.html">
                            <i class="fe fe-user"></i> پروفایل من
                        </a>
                        <a class="dropdown-item" href="profile.html">
                            <i class="fe fe-edit"></i> ویرایش نمایه
                        </a>
                        <a class="dropdown-item" href="profile.html">
                            <i class="fe fe-settings"></i> تنظیمات حساب
                        </a>
                        <a class="dropdown-item" href="profile.html">
                            <i class="fe fe-settings"></i> پشتیبانی
                        </a>
                        <a class="dropdown-item" href="profile.html">
                            <i class="fe fe-compass"></i> فعالیت
                        </a>
                        <a class="dropdown-item" href="signin.html">
                            <i class="fe fe-power"></i> خروج از سیستم
                        </a>
                    </div>
                </div>
                <div class="dropdown d-md-flex header-settings">
                    <a href="#" class="nav-link icon" data-toggle="sidebar-left" data-target=".sidebar-left">
                        <i class="fe fe-align-left header-icons"></i>
                    </a>
                </div>
                <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="تغییر پیمایش">
                    <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                </button><!-- Navresponsive closed -->
            </div>
        </div>
    </div>
    <!-- End Main Header-->		<!-- Mobile-header -->
    <div class="mobile-main-header">
        <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <div class="d-flex order-lg-2 mr-auto">
                    <div class="dropdown header-search">
                        <a class="nav-link icon header-search">
                            <i class="fe fe-search header-icons"></i>
                        </a>
                        <div class="dropdown-menu">
                            <div class="main-form-search p-2">
                                <div class="input-group">
                                    <div class="input-group-btn search-panel">
                                        <select class="form-control select2-no-search">
                                            <option label="دسته بندی ها">
                                            </option>
                                            <option value="IT Projects">
                                                پروژه های IT
                                            </option>
                                            <option value="Business Case">
                                                مورد تجاری
                                            </option>
                                            <option value="Microsoft Project">
                                                پروژه مایکروسافت
                                            </option>
                                            <option value="Risk Management">
                                                مدیریت ریسک
                                            </option>
                                            <option value="Team Building">
                                                تیم سازی
                                            </option>
                                        </select>
                                    </div>
                                    <input type="search" class="form-control" placeholder="هر چیزی را جستجو کنید ...">
                                    <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown main-header-notification flag-dropdown">
                        <a class="nav-link icon country-Flag">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"></circle><g fill="#0052b4"><path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"></path></g><g fill="#d80027"><path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"></path><path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"></path></g></svg>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item d-flex ">
                                <span class="avatar  ml-3 align-self-center bg-transparent"><img src="assets/img/flags/french_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">فرانسوی</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar  ml-3 align-self-center bg-transparent"><img src="assets/img/flags/germany_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">آلمان</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar ml-3 align-self-center bg-transparent"><img src="assets/img/flags/italy_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">ایتالیا</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar ml-3 align-self-center bg-transparent"><img src="assets/img/flags/russia_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">روسیه</span>
                                </div>
                            </a>
                            <a href="#" class="dropdown-item d-flex">
                                <span class="avatar  ml-3 align-self-center bg-transparent"><img src="assets/img/flags/spain_flag.jpg" alt="img"></span>
                                <div class="d-flex">
                                    <span class="mt-2">اسپانیا</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="dropdown ">
                        <a class="nav-link icon full-screen-link">
                            <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                            <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                        </a>
                    </div>
                    <div class="dropdown main-header-notification">
                        <a class="nav-link icon" href="#">
                            <i class="fe fe-bell header-icons"></i>
                            <span class="badge badge-danger nav-link-badge">4</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <p class="main-notification-text">شما 1 اعلان خوانده نشده <span class="badge badge-pill badge-primary mr-3">مشاهده همه</span></p>
                            </div>
                            <div class="main-notification-list">
                                <div class="media new">
                                    <div class="main-img-user online"><img alt="آواتار" src="assets/img/users/5.jpg"></div>
                                    <div class="media-body">
                                        <p>به <strong>اولیویا جیمز</strong> برای شروع الگوی جدید تبریک می گوییم</p><span>15 بهمن  12:32 بعد از ظهر</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user"><img alt="آواتار" src="assets/img/users/2.jpg"></div>
                                    <div class="media-body">
                                        <p><strong></strong>پیام جدید <strong>جوشوا گری</strong> دریافت شد</p><span>13 بهمن   02:56 صبح</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="main-img-user online"><img alt="آواتار" src="assets/img/users/3.jpg"></div>
                                    <div class="media-body">
                                        <p><strong>الیزابت لوئیس</strong> برنامه جدیدی را به فروش مجدد اضافه کرد</p><span>12 بهمن  10:40 بعد از ظهر</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">مشاهده همه اعلان ها</a>
                            </div>
                        </div>
                    </div>
                    <div class="main-header-notification mt-2">
                        <a class="nav-link icon" href="chat.html">
                            <i class="fe fe-message-square header-icons"></i>
                            <span class="badge badge-success nav-link-badge">6</span>
                        </a>
                    </div>
                    <div class="dropdown main-profile-menu">
                        <a class="d-flex" href="#">
                            <span class="main-img-user"><img alt="آواتار" src="assets/img/users/1.jpg"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <h6 class="main-notification-title">سونیا تیلور</h6>
                                <p class="main-notification-text">طراح وب</p>
                            </div>
                            <a class="dropdown-item border-top" href="profile.html">
                                <i class="fe fe-user"></i> پروفایل من
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-edit"></i> ویرایش نمایه
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-settings"></i> تنظیمات حساب
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-settings"></i> پشتیبانی
                            </a>
                            <a class="dropdown-item" href="profile.html">
                                <i class="fe fe-compass"></i> فعالیت
                            </a>
                            <a class="dropdown-item" href="signin.html">
                                <i class="fe fe-power"></i> خروج از سیستم
                            </a>
                        </div>
                    </div>
                    <div class="dropdown  header-settings">
                        <a href="#" class="nav-link icon" data-toggle="sidebar-left" data-target=".sidebar-left">
                            <i class="fe fe-align-left header-icons"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile-header closed -->
    @yield('content')

    <!-- Main Footer-->
    <div class="main-footer text-center">
        <div class="container">
            <div class="row row-sm">
                <div class="col-md-12">
                    <span>کپی رایت © {{date('Y')}}  . طراحی شده توسط <a href="#">Nyorga</a> کلیه حقوق محفوظ است.</span>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer-->				<!-- Sidebar -->
    <div class="sidebar sidebar-left sidebar-animate">
        <div class="sidebar-icon">
            <a href="#" class="text-right float-left text-dark fs-20" data-toggle="sidebar-left" data-target=".sidebar-left"><i class="fe fe-x"></i></a>
        </div>
        <div class="sidebar-body">
            <h5>انجام دادن</h5>
            <div class="d-flex p-3">
                <label class="ckbox"><input checked="" type="checkbox"><span>با دوستان بودن</span></label>
                <span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="ویرایش کنید"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="حذف"></i>
						</span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input type="checkbox"><span>برای ارائه آماده شوید</span></label>
                <span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="ویرایش کنید"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="حذف"></i>
						</span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input type="checkbox"><span>برای ارائه آماده شوید</span></label>
                <span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="ویرایش کنید"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="حذف"></i>
						</span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input checked="" type="checkbox"><span>سیستم به روز شد</span></label>
                <span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="ویرایش کنید"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="حذف"></i>
						</span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input type="checkbox"><span>کار بیشتری انجام دهید</span></label>
                <span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="ویرایش کنید"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="حذف"></i>
						</span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input type="checkbox"><span>سیستم به روز شد</span></label>
                <span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="ویرایش کنید"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="حذف"></i>
						</span>
            </div>
            <div class="d-flex p-3 border-top">
                <label class="ckbox"><input type="checkbox"><span>یک ایده پیدا کنید</span></label>
                <span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="ویرایش کنید"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="حذف"></i>
						</span>
            </div>
            <div class="d-flex p-3 border-top mb-0">
                <label class="ckbox"><input type="checkbox"><span>بررسی پروژه</span></label>
                <span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="ویرایش کنید"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="حذف"></i>
						</span>
            </div>
            <h5>بررسی اجمالی</h5>
            <div class="p-4">
                <div class="main-traffic-detail-item">
                    <div>
                        <span>موسس و مدیر عامل </span> <span>24</span>
                    </div>
                    <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
                    </div><!-- progress -->
                </div>
                <div class="main-traffic-detail-item">
                    <div>
                        <span>طراح UX </span> <span>1</span>
                    </div>
                    <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
                    </div><!-- progress -->
                </div>
                <div class="main-traffic-detail-item">
                    <div>
                        <span>استخدام </span> <span>87</span>
                    </div>
                    <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
                    </div><!-- progress -->
                </div>
                <div class="main-traffic-detail-item">
                    <div>
                        <span>مهندس نرم افزار </span> <span>32</span>
                    </div>
                    <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
                    </div><!-- progress -->
                </div>
                <div class="main-traffic-detail-item">
                    <div>
                        <span>مدیر پروژه </span> <span>32</span>
                    </div>
                    <div class="progress">
                        <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
                    </div><!-- progress -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
</div>
<!-- End Page -->

<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

<!-- Jquery js-->
<script src="{{url('dashboard/assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{url('dashboard/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{url('dashboard/assets/plugins/bootstrap/js/bootstrap-rtl.js')}}"></script>

<!-- Perfect-scrollbar js -->
<script src="{{url('dashboard/assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js')}}"></script>

<!-- Sidemenu js -->
<script src="{{url('dashboard/assets/plugins/sidemenu/sidemenu-rtl.js')}}"></script>

<!-- Sidebar js -->
<script src="{{url('dashboard/assets/plugins/sidebar/sidebar-rtl.js')}}"></script>

<!-- Select2 js-->
<script src="{{url('dashboard/assets/plugins/select2/js/select2.min.js')}}"></script>

<!-- Internal Chart.Bundle js-->
<script src="{{url('dashboard/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

<!-- Peity js-->
<script src="{{url('dashboard/assets/plugins/peity/jquery.peity.min.js')}}"></script>

<!-- Internal Morris js -->
<script src="{{url('dashboard/assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{url('dashboard/assets/plugins/morris.js/morris.min.js')}}"></script>

<!-- Circle Progress js-->
<script src="{{url('dashboard/assets/js/circle-progress.min.js')}}"></script>
<script src="{{url('dashboard/assets/js/chart-circle.js')}}"></script>

<!-- Internal Dashboard js-->
<script src="{{url('dashboard/assets/js/index.js')}}"></script>

<!-- Sticky js -->
<script src="{{url('dashboard/assets/js/sticky.js')}}"></script>

<!-- Custom js -->
<script src="{{url('dashboard/assets/js/custom.js')}}"></script>

<!-- Switcher js -->
<script src="{{url('dashboard/assets/switcher/js/switcher-rtl.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@foreach ($errors->all() as $error)
    <script>
        toastr.error('{{$error}}')
    </script>
@endforeach

</body>
</html>
