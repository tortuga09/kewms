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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/profil', 'HomeController@profil')->name('profil');
Route::patch('/profil/kemaskini', 'HomeController@profilUpdate')->name('profil.update');

Route::group(['middleware' => ['auth']], function () {
  // kewangan => transaksi tunai

  // kewangan => baucer bayaran

  // kewangan =>penyata tunai

  // kewangan => penyata bank

  // tabung => borang kutipan

  // tabung => penyata kutipan

  // aset => daftar aset

  //

  // tetapan => akaun bank

  // tetapan => perihal kewangan

  // tetapan => pengguna
  Route::get('/tetapan/pengguna', 'UserController@index')->name('tetapan.pengguna.index');
  Route::post('/tetapan/pengguna', 'UserController@store')->name('tetapan.pengguna.store');
  Route::patch('/tetapan/pengguna/kemaskini/{id}', 'UserController@update')->name('tetapan.pengguna.update');
  Route::delete('/tetapan/pengguna/hapus/{id}', 'UserController@destroy')->name('tetapan.pengguna.delete');
});
