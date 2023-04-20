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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registerdata' , function () {
    return view ('register');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::post('/registerdata', 'App\Http\Controllers\SiswaController@store');
Route::get('/exam', 'App\Http\Controllers\ExamController@index');
Route::get('/question', 'App\Http\Controllers\QuestionController@index');
Route::resource('siswa', 'App\Http\Controllers\SiswaController');
Route::resource('exam', 'App\Http\Controllers\ExamController');
Route::resource('question', 'App\Http\Controllers\QuestionController');