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

Route::get('/sertifikasiK3', function () {
    return view('/layouts/cover');
})->name('sertifikasiK3');

Route::get('/register', 'AuthController@getRegister')-> name('register');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');

Route::get('/login', 'AuthController@getLogin')->name('login');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');

Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::get('/admin', function () {
    return view('/layouts/admin');
})->middleware('auth')->name('admin');

//proses jenis sertifikasi
Route::get('/jenisSertifikasi','jenisSertifikasiController@show_all_jenisSertifikasi');

Route::get('/jenisSertifikasi/tambah','jenisSertifikasiController@form_create_jenisSertifikasi');

Route::post('/jenisSertifikasi/tambah', 'jenisSertifikasiController@proses_create_jenisSertifikasi');

Route::get('/jenisSertifikasi/{id}','jenisSertifikasiController@show_detail_jenisSertifikasi');

Route::get('/jenisSertifikasi/{id}/edit','jenisSertifikasiController@form_edit_jenisSertifikasi');

Route::post('/jenisSertifikasi/{id}/edit', 'jenisSertifikasiController@proses_edit_jenisSertifikasi');
    
Route::get('/jenisSertifikasi/{id}/delete', 'jenisSertifikasiController@proses_delete_jenisSertifikasi');

//proses data karyawan
Route::get('/karyawan','karyawanController@show_all_dataKaryawan');

Route::get('/karyawan/tambah','karyawanController@form_create_dataKaryawan');

Route::post('/karyawan/tambah', 'karyawanController@proses_create_dataKaryawan');

Route::get('/karyawan/{id}/edit','karyawanController@form_edit_dataKaryawan');

Route::post('/karyawan/{id}/edit','karyawanController@proses_edit_dataKaryawan');
    
Route::get('/karyawan/{id}/delete', 'karyawanController@proses_delete_dataKaryawan');

//proses input data sertifikasi
Route::get('/inputDataSertifikasi/input','inputSertifikasiController@form_input_dataSertifikasi');

Route::post('/inputDataSertifikasi/input','inputSertifikasiController@proses_input_dataSertifikasi');

Route::get('/inputDataSertifikasi', 'inputSertifikasiController@show_all_inputDataSertifikasi');

Route::get('/inputDataSertifikasi/{id}/delete', 'inputSertifikasiController@proses_delete_dataSertifikasiKaryawan');

Route::get('/inputDataSertifikasi/{id}/edit','inputSertifikasiController@form_edit_dataSertifikasi');

Route::post('/inputDataSertifikasi/{id}/edit','inputSertifikasiController@proses_edit_dataSertifikasi');
