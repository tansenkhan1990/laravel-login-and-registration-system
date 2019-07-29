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



Route::get('/', 'RegistrationController@index')->name('index');

Route::post('/insert', 'RegistrationController@insert')->name('insert');
Route::get('/login', 'LoginControlller@login')->name('login');
Route::post('/loginCheck', 'LoginControlller@loginCheck')->name('loginCheck');
Route::get('/dashborad', 'LoginControlller@dashboard')->name('dashboard')
    ->middleware('loginCondition');

