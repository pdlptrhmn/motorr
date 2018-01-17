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

// Route::get('/register',function () {
//     return view('errors.403');
// });
Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function(){

Route::resource('User', 'AkunController');
Route::resource('Merekk', 'MerekkController');
Route::resource('Iklan', 'IklanController');
Route::resource('Tipe', 'TipeController');
Route::resource('Pemasang', 'PemasangController');

});