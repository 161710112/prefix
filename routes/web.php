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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'auth' ], function () {
    Route::get('/', function () {
        return ' ini adalah halaman admin saya';
    });
    Route::get('menejer', function () {
        return ' ini adalah akun menejer saya';
    });
    Route::get('karyawan', function () {
        return ' ini akun karyawan baru saya';
    });
    Route::get('user', function () {
        return ' ini adalah halaman user  saya';
    });
    
});
Route::group(['prefix' => 'menejer', 'middleware' => 'auth'], function (){
    Route::get('create', function () {
        return ' disini adalah halaman create';
    });
    Route::get('edit', function () {
        return ' disini adalah halaman untuk mengedit data';
    });
    Route::get('index', function () {
        return ' disini adalah halaman untuk mengatur tampilan index';
    });
    Route::get('create', function () {
        return ' disini adalah halaman create';
    });
    Route::get('show', function () {
        return ' disini adalah halaman untuk melihat saja';
    });
});


