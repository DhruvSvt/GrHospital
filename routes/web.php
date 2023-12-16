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

// Route::get('/gallery',function()
// {
//     return view('visitors.gallery');
// });
Route::view('/gallery','visitors.gallery');

Route::view('/doctors','visitors.doctor');

Route::view('/blogs','visitors.blogs');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
