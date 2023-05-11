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
Route::resource('question', 'App\Http\Controllers\QuestionController');
Route::resource('jawaban', 'App\Http\Controllers\JawabanController');

/** for admin page **/
Route::get('/panel/login/', 'App\Http\Controllers\AdminLoginController@showLoginForm')->name('panel.login');
Route::post('/panel/login', 'App\Http\Controllers\AdminLoginController@login')->name('panel.login.post');
Route::post('/panel/logout', 'App\Http\Controllers\AdminLoginController@logout')->name('panel.logout');

/** for siswa page **/
Route::get('/login', 'App\Http\Controllers\SiswaLoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\SiswaLoginController@login')->name('login.post');
Route::post('/logout', 'App\Http\Controllers\SiswaLoginController@logout')->name('logout');

/** for middleware **/
Route::group(["middleware" => ["auth", "level.check:admin"]], function(){
    Route::resource('/exam', 'App\Http\Controllers\ExamController');
});

Route::group(["middleware" => ["auth", "level.check:siswa"]], function(){
    Route::resource('/exam', 'App\Http\Controllers\ExamController');
});
