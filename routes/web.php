<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/daftar_mahasiswa','App\Http\Controllers\MahasiswaController@index');

Route::get('/daftar_mahasiswa', [MahasiswaController::class,'index']);

// Route::post('detail_mahasiswa',[MahasiswaController::class, 'detail_mhs']);

Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
 
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/sidebar1',[AdminController::class,'show_sidebar1']);
Route::get('/admin/sidebar2',[AdminController::class,'show_sidebar2']);
Route::get('/admin/sidebar3',[AdminController::class,'show_sidebar3']);
Route::get('/admin/sidebar4',[AdminController::class,'show_sidebar4']);
Route::get('/admin/sidebar5',[AdminController::class,'show_sidebar5']);



