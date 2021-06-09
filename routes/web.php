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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('citie', 'App\Http\Controllers\CitieController');
Route::resource('client', 'App\Http\Controllers\ClientController');
Route::get('/export-clients', 'App\Http\Controllers\ExcelController@exportClients');
Route::post('/export-clients', 'App\Http\Controllers\ExcelController@exportClients');
Route::post('/import-clients', 'App\Http\Controllers\ExcelController@importClients');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
