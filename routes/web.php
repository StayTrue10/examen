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

Route::get('/registro', function () {
    return view('paginas.reservaciones');
});
Route::get('/reservaciones', function () {
    return view('paginas.mesas');
});
Route::get('/dash', 'HomeController@index')->name('main')->middleware('auth');
Route::get('/minor', 'HomeController@minor')->name('minor')->middleware('auth');;