<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[IndexController::class,'index'])->name('index');

Route::view('/gallery','visitors.gallery')->name('gallery');

Route::get('/doctors',[DoctorController::class,'show'])->name('doctors');
Route::get('/doctor/{id}',[DoctorController::class,'doctor_detail'])->name('doctor-detail');
Route::get('/doctor-list',[DoctorController::class,'doctor_list'])->name('doctor-list');

Route::get('/blogs',[BlogController::class,'show'])->name('blogs');

Route::view('/blog-single','visitors.blog-single')->name('blog-single');
Route::get('/blog/{id}',[BlogController::class,'blog_detail'])->name('blog-detail');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
