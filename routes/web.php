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
Route::get('/home', 'App\Http\Controllers\AwalController@home');
// Route::get('/home/json', 'App\Http\Controllers\AwalController@json');
Route::get('/barangmasuk', 'App\Http\Controllers\AwalController@incoming');
Route::get('/barangmasuk/json', 'App\Http\Controllers\AwalController@json');
