<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller;

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

Route::get('/', 'AdminController@index')->name('raiz');
Route::get('/micrositio')->name('ViewMicrositio');
Route::get('/micrositio/{id}', 'AdminController@micrositio')->name('micrositio');
Route::get('/micrositioVideo/{id}', 'AdminController@micrositioVideo')->name('micrositioVideo');
Route::get('/content', 'AdminController@content')->name('content');
