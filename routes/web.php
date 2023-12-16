<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('visitors.index');
});

Route::view('/gallery','visitors.gallery')->name('gallery');

Route::view('/doctors','visitors.doctor')->name('doctors');

Route::view('/blogs','visitors.blogs')->name('blogs');

Route::view('/blog-single','visitors.blog-single')->name('blog-single');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
