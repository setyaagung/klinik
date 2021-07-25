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
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    //dokter
    Route::resource('doctor', 'DoctorController');
    //pasien
    Route::resource('pasien', 'PasienController');
    //pemeriksaan covid
    Route::resource('covid', 'CovidController');
    Route::get('/surat-keterangan/covid/{id}/code={qrcode}', 'CovidController@cetak')->name('covid.cetak');
    //keterangan dokter
    Route::resource('keterangan-dokter', 'KeteranganDokterController');
    Route::get('/surat-keterangan-dokter/{id}', 'KeteranganDokterController@cetak')->name('keterangan-dokter.cetak');
    //lab
    Route::get('/laboratorium/getpasien', 'LaboratoriumController@getPasien');
    Route::resource('laboratorium', 'LaboratoriumController');
    Route::get('/permintaan-laboratorium/{id}', 'LaboratoriumController@cetak')->name('laboratorium.cetak');
    //user
    Route::resource('user', 'UserController');
    Route::get('/update-status/{id}', 'UserController@update_status');
    Route::patch('/reset-password/{id}', 'UserController@reset_password')->name('reset-password');
});
