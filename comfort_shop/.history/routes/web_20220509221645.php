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

Route::get('/', 'App\Http\Controllers\MainController@forLend');

Route::get('/Lend', 'App\Http\Controllers\MainController@forLend');

Route::get('/Catalog', 'App\Http\Controllers\MainController@forCatalog');

Route::get('/Info', 'App\Http\Controllers\MainController@forInfo');

Route::post('/result', 'App\Http\Controllers\MainController@result');

Route::post('/check', 'App\Http\Controllers\MainController@check');

Route::get('/item/{id}', 'App\Http\Controllers\MainController@forItem');




