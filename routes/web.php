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
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
//frontend surat keterangan
Route::get('/surat-keterangan/{id}/code={qrcode}', 'SuratController@index')->name('surat');
Route::get('/keterangan-dokter/{id}/code={qrcode}', 'SuratController@surat_dokter')->name('surat_dokter');
Route::get('/surat-laboratorium/{id}/darah-rutin/code={qrcode}', 'SuratController@darah_rutin')->name('darah_rutin');
Route::get('/surat-laboratorium/{id}/darah-lengkap/code={qrcode}', 'SuratController@darah_lengkap')->name('darah_lengkap');
Route::get('/surat-laboratorium/{id}/urine-rutin/code={qrcode}', 'SuratController@urine_rutin')->name('urine_rutin');
Route::get('/surat-laboratorium/{id}/serologi/code={qrcode}', 'SuratController@serologi')->name('serologi');
Route::get('/surat-laboratorium/{id}/kimia-darah/code={qrcode}', 'SuratController@kimia_darah')->name('kimia_darah');
Route::get('/surat-vaksin/{id}/code={qrcode}', 'SuratController@vaksin')->name('vaksin');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    //dokter
    Route::resource('doctor', 'DoctorController');
    //pasien
    Route::resource('pasien', 'PasienController');
    //pemeriksaan covid
    Route::resource('covid', 'CovidController');
    Route::get('/surat-keterangan/covid/{id}/code={qrcode}', 'CovidController@cetak')->name('covid.cetak');
    //laboratorium
    Route::get('/laboratorium/getpasien', 'LaboratoriumController@getPasien');
    Route::resource('laboratorium', 'LaboratoriumController');
    Route::get('/surat-laboratorium/{id}/code={qrcode}', 'LaboratoriumController@cetak')->name('laboratorium.cetak');
    //keterangan dokter
    Route::resource('keterangan-dokter', 'KeteranganDokterController');
    Route::get('/surat-keterangan-dokter/{id}/code={qrcode}', 'KeteranganDokterController@cetak')->name('keterangan-dokter.cetak');
    //vaksin
    Route::get('/vaksin/getpasien', 'VaksinController@getPasien');
    Route::resource('vaksin', 'VaksinController');
    Route::get('/vaksin/{id}/code={qrcode}', 'VaksinController@cetak')->name('vaksin.cetak');
    //user
    Route::resource('user', 'UserController');
    Route::get('/update-status/{id}', 'UserController@update_status');
    Route::patch('/reset-password/{id}', 'UserController@reset_password')->name('reset-password');
});
