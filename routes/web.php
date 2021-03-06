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
    return view('videos');
});
Route::get('/videomarker', function () {
    return view('videomarker');
});
Route::get('/videopreview', function () {
    return view('preview');
});
Route::get('/video', function () {
    return view('video');
});