<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::middleware(['auth'])->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('admin')-> group(function (){
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class );
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class );
    Route::resource('admins', \App\Http\Controllers\Admin\AdminController::class );
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class );
    Route::resource('setting_group.settings', \App\Http\Controllers\Admin\SettingController::class );
});

