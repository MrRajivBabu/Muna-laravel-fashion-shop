<?php

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// front end
// Route::get('/', function () {
//     return view('welcome');
// });

//home
Route::get('/', [FrontController::class, 'index'])->name('home.index');


Route::get('/admin', function () {
    return redirect('/admin/dashboard');
});
//backend
Route::group(['prefix' => 'admin'], function(){

    Route::group(['middleware' => 'admin.guest'],function(){

        //admin login
        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        //validation
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'],function(){

        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [HomeController::class, 'logout'])->name('admin.logout');
    });

});