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


//Auth::routes([]);
Auth::routes(['register'=>false]);  //akan menghilangkan link register di navbar

Route::get('/', 'pagesController@homepage');
Route::get('about', 'pagesController@about');

Route::resource('mahasiswa', 'mahasiswaController');
Route::resource('prodi', 'prodiController')->parameters(['prodi'=>'prodi']);
Route::resource('user', 'userController');

/* //daftar semua route mahasiswaController tanpa resource
Route::get('mahasiswa', 'mahasiswaController@index');
Route::get('mahasiswa/create', 'mahasiswaController@create');
Route::post('mahasiswa', 'mahasiswaController@store');
Route::get('mahasiswa/{mahasiswa}', 'mahasiswaController@show');
Route::get('mahasiswa/{mhs}/edit', 'mahasiswaController@edit');
Route::patch('mahasiswa/{mahasiswa}', 'mahasiswaController@update');
Route::delete('mahasiswa/{mhs}','mahasiswaController@destroy');
Route::get('date-mutator','mahasiswaController@datemutator');
 
Route::get('prodi', 'prodiController@index');
Route::get('prodi/create', 'prodiController@create');
Route::post('prodi', 'prodiController@store');
Route::get('prodi/{prodi}', 'prodiController@show');
Route::get('prodi/{prodi}/edit', 'prodiController@edit');
Route::patch('prodi/{prodi}', 'prodiController@update');
Route::delete('prodi/{prodi}','prodiController@destroy');

*/