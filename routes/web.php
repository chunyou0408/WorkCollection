<?php

use Illuminate\Support\Facades\Auth;
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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {

    // return view('welcome');

    return redirect('/01');
});


//首頁-個人作品集頁面-切版相關
Route::prefix('/01')->group(function () {
    Route::get('/', function () {
        return view('front.01.01-layout');
    });
    Route::get('/00', function () {
        return view('front.01.01.01-00_float');
    });

    Route::get('/01', function () {
        return view('front.01.01.01-01_float');
    });
    Route::get('/02', function () {
        return view('front.01.01.01-02_float');
    });
    Route::get('/03', function () {
        return view('front.01.01.01-03_float');
    });
    Route::get('/04', function () {
        return view('front.01.01.01-04_float');
    });
    Route::get('/05', function () {
        return view('front.01.01.01-05_float');
    });
});


//JavaScript相關
Route::prefix('/02')->group(function () {
    Route::get('/', function () {
        return view('front.02.02-JavaScript');
    });
});


//Bootstrap相關
Route::prefix('/03')->group(function () {
    Route::get('/', function () {
        return view('front.03.01-Bootstrap');
    });
});
