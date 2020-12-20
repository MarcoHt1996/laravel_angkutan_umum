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

Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Angkutan/form',[App\Http\Controllers\AngkutanController::class,'tampilform'])
->name("Angkutan.form");

Route::get('/Angkutan/list',[App\Http\Controllers\AngkutanController::class,'tampillist'])
->name("Angkutan.list");

Route::get('/keberangkatan/form',[App\Http\Controllers\PertemuanController::class,'tampilform'])
->name("keberangkatan.form");

Route::get('/user/email',[App\Http\Controllers\KembaliController::class,'tampil_form_email'])
    ->name("user.email");

    Route::view('/peserta/detail','user.detail')
        ->name("peserta.detail");

    Route::get('/daftarsewa/form',[App\Http\Controllers\DataSewController::class,'tampil_form_datasewa'])
    ->name("daftarsewa.form");
