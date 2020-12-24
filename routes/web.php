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
  Route::get('/aset', 'AsetController@index')->name('aset.index');
  Route::post('/aset', 'AsetController@store')->name('aset.store');
  Route::patch('/aset/{id}', 'AsetController@update')->name('aset.update');
  Route::get('/aset/print', 'AsetController@print')->name('aset.print');

  // tetapan - organisasi
  Route::get('/tetapan/organisasi', 'TetapanController@indexOrganisasi')->name('tetapan.organisasi.index');
  Route::patch('/tetapan/organisasi/{id}', 'TetapanController@updateOrganisasi')->name('tetapan.organisasi.update');

  // tetapan => akaun bank
  Route::get('/tetapan/akaun-bank', 'TetapanController@indexBank')->name('tetapan.bank.index');
  Route::post('/tetapan/akaun-bank', 'TetapanController@storeBank')->name('tetapan.bank.store');
  Route::patch('/tetapan/akaun-bank/{id}', 'TetapanController@updateBank')->name('tetapan.bank.update');

  // tetapan => perihal kewangan
  Route::get('/tetapan/perihal-kewangan', 'TetapanController@indexPerihal')->name('tetapan.perihal.index');
  Route::post('/tetapan/perihal-kewangan', 'TetapanController@storePerihal')->name('tetapan.perihal.store');
  Route::patch('/tetapan/perihal-kewangan/{id}', 'TetapanController@updatePerihal')->name('tetapan.perihal.update');

  // tetapan => pengguna
  Route::get('/pengguna-sistem', 'UserController@index')->name('tetapan.pengguna.index');
  Route::post('/pengguna-sistem', 'UserController@store')->name('tetapan.pengguna.store');
  Route::patch('/pengguna-sistem/kemaskini/{id}', 'UserController@update')->name('tetapan.pengguna.update');
  Route::delete('/pengguna-sistem/hapus/{id}', 'UserController@destroy')->name('tetapan.pengguna.delete');
});
