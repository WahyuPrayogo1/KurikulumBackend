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

Route::view('','home')->name('home');


Route::resource('/guru','GuruController');
Route::resource('/kelas','KelasController');
Route::resource('/jurusan','JurusanController');
