<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FooterTitleController;
use App\Http\Controllers\Admin\FooterTitleLinkController;
use App\Http\Controllers\Admin\HeaderLinkController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::middleware(['auth'])->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('admin')-> group(function (){
    Route::resource('roles', RoleController::class );
    Route::resource('users', UserController::class );
    Route::resource('admins', AdminController::class );
    Route::resource('categories', CategoryController::class );
    Route::resource('setting_group.settings', SettingController::class );
    Route::resource('pages', PageController::class );

    Route::resource('header_links', HeaderLinkController::class );
    Route::resource('footer_titles', FooterTitleController::class );
    Route::resource('footer_title.footer_title_links', FooterTitleLinkController::class );
});

