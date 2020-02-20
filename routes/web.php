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
    return view('index');
});

Route::resource('/dashboard', 'DashboardController')->middleware('auth');

Route::resource('/kategori', 'KategoriController')->middleware('auth');

Route::resource('/mapel', 'MapelController')->middleware('auth');

Route::resource('/tahun_akademik', 'TahunController')->middleware('auth');

Route::resource('/kepsek', 'KepsekController')->middleware('auth');

Route::resource('/walas', 'WalasController')->middleware('auth');

Route::resource('/guru', 'GuruController')->middleware('auth');
Route::get('generate-guru','GuruController@pdfguru')->middleware('auth');

Route::resource('/siswa_smp', 'SmpController')->middleware('auth');
Route::get('generate-smp','SmpController@pdfsmp')->middleware('auth');

Route::resource('/siswa_smk', 'SmkController')->middleware('auth');
Route::get('generate-smk','SmkController@pdfsmk')->middleware('auth');

Route::resource('/penilaiansmp', 'PenilaiansmpController')->middleware('auth');
Route::get('raport-smp/{id}','PenilaiansmpController@pdfsmp')->middleware('auth');

Route::resource('/penilaiansmk', 'PenilaiansmkController')->middleware('auth');
Route::get('raport-smk/{id}','PenilaiansmkController@pdfsmk')->middleware('auth');

Route::resource('/siswa', 'AllsiswaController')->middleware('auth');
Route::get('generate-siswa','AllsiswaController@pdfsiswa')->middleware('auth');

Route::resource('/user', 'KelolaController')->middleware('auth');
Route::resource('/profile', 'ProfileController')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');