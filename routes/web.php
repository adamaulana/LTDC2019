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


Route::get('halo', function () {
    return "Halo, Selamat Datang Adampjp";
});

Route::get('/','pesertaController@index');
Route::get('/admin','adminController@showDashboard');
Route::get('/admin/team','adminController@showTim');
Route::get('/admin/tim_lolos','adminController@showTimLolos');
Route::get('/admin/stranger-team','adminController@strangeTim');
Route::get('/admin/hapus_strangetim/{id}','adminController@deleteStrangeTim');
Route::get('admin/team/detail/{id}','adminController@detailTim');
Route::post('/admin/atur_web','adminController@aturWeb');
Route::get('/setting_admin','adminController@settingAdmin');
Route::get('/user_register','adminController@regiss');
Route::get('/user_dashboard','pesertaController@getData');
Route::get('/user_petunjuk','pesertaController@petunjuk');
Route::get('/user_file_info','pesertaController@file_info');
Route::get('/user_file_lomba','pesertaController@file_lomba');

Route::get('/twb',function(){return view('user/twibbon');});
Route::get('/login',function(){return view('user/login_user');});
Route::get('/pendaftaran_ditutup',function(){return view('user/pendaftaran_ditutup');});
Route::get('/pendaftaran_belumbuka',function(){return view('user/pendaftaran_belumbuka');});
Route::get('/berkas_tutup',function(){return view('user/berkas_tutup');});
Route::get('/maintenance',function(){return view('user/maintenance');});
Route::get('/login_admin',function(){return view('admin/login_admin');});
Route::get('/verif',function(){return view('user/verif');});

Route::get('/validasi_biodata/{id}','adminController@validasiBiodata');
Route::get('/batal_biodata/{id}','adminController@batalBiodata');
Route::get('/gagal_biodata/{id}','adminController@gagalBiodata');

Route::get('/validasi_pembayaran/{id}','adminController@validasiPembayaran');
Route::get('/batal_pembayaran/{id}','adminController@batalPembayaran');
Route::get('/gagal_pembayaran/{id}','adminController@gagalPembayaran');

Route::get('/kunci_data/{id}','pesertaController@kunciData');
Route::get('/buka_kunci/{id}','adminController@bukaKunci');
Route::get('/lolos_tim/{id}','adminController@lolosTim');
Route::get('/batal_lolos/{id}','adminController@batalLolos');
Route::get('/tidak_lolos/{id}','adminController@tidakLolos');
Route::get('/diskualifikasi/{id}','adminController@diskualifikasiTim');

Route::post('/peserta/tambah','pesertaController@tambahTim');
Route::post('/peserta/tambah_manual','pesertaController@tambahManual');
Route::post('/peserta/login','pesertaController@loginPeserta');
Route::post('/admin/login','adminController@loginAdmin');
Route::post('/admin/tambah_admin','adminController@tambahAdmin');
Route::post('/admin/tambah_sponsor','adminController@tambahSponsor');
Route::post('/admin/tambah_info','adminController@tambahFileInfo');
Route::post('/admin/tambah_teknis','adminController@tambahFileTeknis');
Route::get('/admin/hapus_sponsor/{id}','adminController@deleteSponsor');
Route::get('/admin/hapus_info/{id}','adminController@deleteFileInfo');
Route::get('/admin/hapus_teknis/{id}','adminController@deleteFileTeknis');
Route::get('/admin/hapus/{id}','adminController@hapusAdmin');
Route::post('/peserta/verifikasi','pesertaController@verifPeserta');

Route::post('/edit_ketua_tim','pesertaController@updateKetua');
Route::post('/edit_anggota_tim','pesertaController@updateAnggota');
Route::post('/edit_pembimbing_tim','pesertaController@updatePembimbing');
Route::post('/edit_buktibayar','pesertaController@updateBayar');

Route::post('/admin/admin_edit_ketua_tim','pesertaController@adminUpdateKetua');
Route::post('/admin/admin_edit_buktibayar','pesertaController@adminUpdateBayar');
Route::post('/admin/admin_edit_pembimbing_tim','pesertaController@adminUpdatePembimbing');
Route::post('/admin/admin_edit_anggota_tim','pesertaController@adminUpdateAnggota');



Route::get('/kirimemail','adminController@kirimEmail');
Route::get('/logoutPeserta','pesertaController@logout');
Route::get('/logoutAdmin','adminController@logout');
Route::get('/setting_admin','adminController@settingAdmin');
Route::get('/setting_sponsor','adminController@settingSponsor');
Route::get('/setting_info','adminController@showFileInfo');
Route::get('/setting_teknis','adminController@showFileTeknis');
Route::get('/admin/tambah_manual','adminController@showTambahManual');
