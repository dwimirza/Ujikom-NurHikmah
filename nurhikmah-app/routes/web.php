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


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/exam', 'App\Http\Controllers\ExamController@index');
Route::get('/question', 'App\Http\Controllers\QuestionController@index');
Route::delete('/exam/{id}', 'App\Http\Controllers\ExamController@destroy');
Route::resource('siswa', 'App\Http\Controllers\SiswaController');
Route::resource('exam', 'App\Http\Controllers\ExamController');
Route::resource('question', 'App\Http\Controllers\QuestionController');
Route::resource('jawaban', 'App\Http\Controllers\JawabanController');