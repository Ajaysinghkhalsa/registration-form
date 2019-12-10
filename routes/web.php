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

Route::get('/','Controller@showRegister')->name('register');

Route::get('register','Controller@showRegister')->name('register');
Route::post('register','Controller@postRegister')->name('register');

Route::get('login','Controller@showLogin')->name('login');
Route::post('login','Controller@checklogin')->name('login');

Route::get('tictactoe','Controller@showTictactoe')->name('tictactoe');

Route::get('logout','Controller@logout')->name('logout');