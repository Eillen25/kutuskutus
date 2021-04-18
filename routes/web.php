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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'App\Http\Controllers\AwalController@home');
// Route::get('/home/json', 'App\Http\Controllers\AwalController@json');
Route::get('/barangmasuk', 'App\Http\Controllers\AwalController@incoming');
Route::get('/barangmasuk/json', 'App\Http\Controllers\AwalController@json');

Route::get('/barangkeluar', 'App\Http\Controllers\AwalController@exit');
Route::get('/barangkeluar/exit_json', 'App\Http\Controllers\AwalController@exit_json');

Route::get('/produk', 'App\Http\Controllers\AwalController@produk');
Route::get('/produk/produk_json', 'App\Http\Controllers\AwalController@produk_json');

Route::get('/reseller', 'App\Http\Controllers\AwalController@reseller');
Route::get('/reseller/reseller_json', 'App\Http\Controllers\AwalController@reseller_json');

Route::get('/stockopname', 'App\Http\Controllers\AwalController@sopname');
Route::get('/stockopname/sopname_json', 'App\Http\Controllers\AwalController@sopname_json');