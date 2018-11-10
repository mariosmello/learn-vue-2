<?php

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

Route::get('/class1', function () {
    return view('class1');
});
Route::get('/class3', function () {
    return view('class3');
});
Route::get('/class4', function () {
    return view('class4');
});
Route::get('/class5', function () {
    return view('class5');
});
Route::get('/class6', function () {
    return view('class6');
});