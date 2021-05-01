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
Route::get('/', 'App\Http\Controllers\AwalController@login');
Route::get('/home', 'App\Http\Controllers\AwalController@home');
Route::get('/home/json', 'App\Http\Controllers\AwalController@json');
// LOGIN
Route::get('/login', 'App\Http\Controllers\AwalController@login');
Route::post('/authenticate','App\Http\Controllers\AwalController@authentication');
Route::post('/forgotpass','App\Http\Controllers\AwalController@forgot_pass');
// BARANG MASUK
Route::get('/barangmasuk', 'App\Http\Controllers\AwalController@incoming');
Route::get('/barangmasuk/json', 'App\Http\Controllers\AwalController@json');

Route::get('/barangmasuk/edit/{id}', 'App\Http\Controllers\BarangMasukController@edit');


// READ BARANG KELUAR
Route::get('/barangkeluar', 'App\Http\Controllers\AwalController@exit');
Route::get('/barangkeluar/exit_json', 'App\Http\Controllers\AwalController@exit_json');
// UPDATE BARANG KELUAR
Route::get('/barangkeluar/edit/{id}', 'App\Http\Controllers\BarangKeluarController@edit');
Route::post('/barangkeluar/edit/update', 'App\Http\Controllers\BarangKeluarController@update_exit');
// CREATE BARANG KELUAR
Route::get('/addexit', 'App\Http\Controllers\BarangKeluarController@addexit');

Route::get('/produk', 'App\Http\Controllers\AwalController@produk');
Route::get('/produk/produk_json', 'App\Http\Controllers\AwalController@produk_json');

Route::get('/reseller', 'App\Http\Controllers\AwalController@reseller');
Route::get('/reseller/reseller_json', 'App\Http\Controllers\AwalController@reseller_json');

Route::get('/stockopname', 'App\Http\Controllers\AwalController@sopname');
Route::get('/stockopname/sopname_json', 'App\Http\Controllers\AwalController@sopname_json');

Route::get('/admin', 'App\Http\Controllers\AwalController@admin');
Route::get('/admin/admin_json', 'App\Http\Controllers\AwalController@admin_json');

// Route::get('/exit2', 'App\Http\Controllers\AwalController@exit2');

Route::get('/profile', 'App\Http\Controllers\AwalController@profile');

Route::get('/login', 'App\Http\Controllers\AwalController@login');

Route::get('/produkedit', 'App\Http\Controllers\AwalController@produkedit');

Route::get('/reselleredit', 'App\Http\Controllers\AwalController@reselleredit');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/adminedit', 'App\Http\Controllers\AwalController@adminedit');



Route::get('/detailbarangkeluar', 'App\Http\Controllers\AwalController@detailbarangkeluar');

Route::get('/detailbarangmasuk', 'App\Http\Controllers\AwalController@detailbarangmasuk');

Route::get('/about', 'App\Http\Controllers\AwalController@about');

Route::get('/deleteincoming', 'App\Http\Controllers\AwalController@deleteincoming');

Route::get('/addproduk', 'App\Http\Controllers\AwalController@addproduk');

Route::get('/addso', 'App\Http\Controllers\AwalController@addso');

Route::get('/addreseller', 'App\Http\Controllers\AwalController@addreseller');

Route::get('/addadmin', 'App\Http\Controllers\AwalController@addadmin');
