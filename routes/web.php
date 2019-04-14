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

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

Route::get('/list-buku', 'ListBukuController@index');

Route::get('/list-buku/math', 'MathController@index');

Route::get('/list-buku/sejarah', 'SejarahController@index');

Route::get('/list-buku/fisika', 'FisikaController@index');

Route::get('/list-buku/kimia', 'KimiaController@index');

Route::get('/list-buku/biologi', 'BiologiController@index');

Route::get('/list-buku/indo', 'IndoController@index');

Route::get('/list-buku/english', 'EnglishController@index');

Route::get('/list-buku/sunda', 'SundaController@index');

Route::get('/list-buku/agama', 'AgamaController@index');

Route::get('/list-buku/senibudaya', 'SeniBudayaController@index');