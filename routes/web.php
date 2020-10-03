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

Route::view('/', 'pages.user.login.signin');

Route::post('login', function () {
    return 'Logado com Sucesso!';
})->name('login');

Route::view('register', 'pages.user.register.signup')->name('register');

Route::view('recover', 'pages.user.login.recover')->name('recover');
