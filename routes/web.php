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

Route::get('/', 'Masyarakat\MasyarakatController@index');
Route::get('/userguide', 'Masyarakat\MasyarakatController@userGuide');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@loginHandler');
Route::get('/regist', 'Masyarakat\MasyarakatController@create');
Route::post('/regist', 'Masyarakat\MasyarakatController@store');


Route::group(['middleware' => 'auth:masyarakat'], function() {
    // Masyarakat
    Route::get('/home', 'Masyarakat\MasyarakatController@home');
    Route::get('/report', 'Masyarakat\MasyarakatController@report');
    Route::post('/report', 'Masyarakat\MasyarakatController@lapor');
    Route::get('/account', 'Masyarakat\MasyarakatController@account');
    Route::get('/account/edit', 'Masyarakat\MasyarakatController@edit');
    Route::patch('/account/edit', 'Masyarakat\MasyarakatController@update');
    Route::delete('/account/delete', 'Masyarakat\MasyarakatController@destroy');
    Route::get('/history', 'Masyarakat\MasyarakatController@history');
    Route::get('/report/respond/{id}', 'Masyarakat\MasyarakatController@respond');
});

Route::group(['middleware' => 'auth:Petugas'], function() {
    // Petugas
    Route::group(['middleware' => 'checkLevel:Petugas'], function() {
        Route::get('/petugas', 'Petugas\PetugasController@index');
        Route::get('/petugas/laporan', 'Petugas\PetugasController@laporan');
        Route::get('/petugas/laporan/{id}', 'Petugas\PetugasController@detailLaporan');
        Route::delete('/petugas/laporan/{id}', 'Petugas\PetugasController@hapusLaporan');
        Route::patch('/petugas/laporan/proses/{id}', 'Petugas\PetugasController@prosesLaporan');
        Route::get('/petugas/laporan/tanggapan/{id}', 'Petugas\PetugasController@tanggapanLaporan');
        Route::post('/petugas/laporan/tanggapan/{id}', 'Petugas\PetugasController@tanggapanLaporanHandle');
        Route::get('/petugas/profile', 'Petugas\PetugasController@show');
        Route::get('/petugas/edit', 'Petugas\PetugasController@edit');
        Route::patch('/petugas/edit', 'Petugas\PetugasController@update');
    });
    
    // Admin
    
    Route::group(['middleware' => 'checkLevel:Admin'], function() {
        Route::get('/admin', 'Admin\AdminController@index');
        Route::get('/admin/regist', 'Admin\AdminController@create');
        Route::post('/admin/regist', 'Admin\AdminController@store');
        Route::get('/admin/petugaslist', 'Admin\AdminController@petugas');
        Route::get('/admin/petugaslist/{id}', 'Admin\AdminController@show');
        Route::get('/admin/petugaslist/edit/{id}', 'Admin\AdminController@edit');
        Route::patch('/admin/petugaslist/edit/{id}', 'Admin\AdminController@update');
        Route::delete('/admin/petugaslist/{id}', 'Admin\AdminController@destroy');
        Route::get('/admin/masyarakatlist', 'Admin\AdminController@masyarakat');
        Route::get('/admin/masyarakatlist/{id}', 'Admin\AdminController@masyarakatDetail');
        Route::get('/admin/profile', 'Admin\AdminController@profile');
        Route::get('/admin/edit', 'Admin\AdminController@editProfile');
        Route::patch('/admin/edit', 'Admin\AdminController@updateProfile');
        Route::get('/admin/report', 'Admin\AdminController@report');
        Route::get('/admin/report/{id}', 'Admin\AdminController@detailReport');
        Route::delete('/admin/report/{id}', 'Admin\AdminController@deleteReport');
        Route::patch('/admin/report/process/{id}', 'Admin\AdminController@process');
        Route::get('/admin/report/respond/{id}', 'Admin\AdminController@respond');
        Route::post('/admin/report/respond/{id}', 'Admin\AdminController@respondHandle');
        Route::get('/admin/exportpdf', 'Admin\AdminController@exportPDF');
        Route::post('/admin/exportpdf', 'Admin\AdminController@exportPDF');
    });
    
});

Route::group(['middleware' => 'auth:Petugas,masyarakat'], function() {
    Route::get('/logout', 'AuthController@logout');
});