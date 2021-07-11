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
  $organisasi = App\Organisasi::count();
  $admin = App\User::count();
  if($organisasi == 0 || $admin == 0) {
    return redirect()->route('install');
  }
  else {
    return view('welcome');
  }
});

Auth::routes(['register' => false]);
// install first time use
Route::get('/install', 'InstallController@install')->name('install');
Route::post('/install', 'InstallController@install_store')->name('install-store');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/profil', 'HomeController@profil')->name('profil');
Route::patch('/profil/kemaskini', 'HomeController@profilUpdate')->name('profil.update');

Route::group(['middleware' => ['auth']], function () {
  // kewangan => transaksi tunai

  // kewangan => transaksi bank

  // kewangan => resit rasmi

  // kewangan => baucer bayaran

  // kewangan =>penyata kewangan

  // kewangan => penyata bank

  // tabung => borang kutipan
  Route::get('/tabung/borang-kutipan', 'TabungController@borang')->name('tabung.kutipan.borang');
  Route::post('/tabung/borang-kutipan', 'TabungController@simpan')->name('tabung.kutipan.simpan');
  Route::get('/tabung/cetak-borang-kutipan/{id}', 'TabungController@cetak_borang')->name('tabung.kutipan.cetak.borang');

  // tabung => penyata kutipan
  Route::get('/tabung/penyata-kutipan', 'TabungController@penyata')->name('tabung.kutipan.penyata');
  Route::get('/tabung/cetak-penyata-kutipan', 'TabungController@cetak_penyata')->name('tabung.kutipan.cetak.penyata');
  Route::post('/tabung/penyata-kutipan', 'TabungController@tarikh')->name('tabung.kutipan.tarikh');
  Route::get('/tabung/cetak-penyata-tarikh', 'TabungController@cetak_tarikh')->name('tabung.kutipan.cetak.tarikh');

  // aset => daftar aset
  Route::get('/aset', 'AsetController@index')->name('aset.index');
  Route::post('/aset', 'AsetController@store')->name('aset.store');
  Route::patch('/aset/{id}', 'AsetController@update')->name('aset.update');
  Route::get('/aset/print', 'AsetController@print')->name('aset.print');

  // tetapan => organisasi
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
