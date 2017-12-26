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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/', '\App\Http\Controllers\HomeController@index');

Route::get('/search', '\App\Http\Controllers\HomeController@result');
//Route::post('/search', '\App\Http\Controllers\HomeController@result');

Route::get('/result', '\App\Http\Controllers\HomeController@result');

Route::get('/payment', '\App\Http\Controllers\HomeController@payment');
Route::get('/payment/{id}', '\App\Http\Controllers\HomeController@payment');

Route::get('/home', '\App\Http\Controllers\HomeController@index');

Route::get('/DashBoard', '\App\Http\Controllers\DashBoardController@index');
Route::get('/dashboard', '\App\Http\Controllers\DashBoardController@index');

$this->get('login', '\App\Http\Controllers\HomeController@index')->name('login');
$this->post('login', 'Auth\LoginController@login');
//$this->post('logout', 'Auth\LoginController@logout')->name('logout');

$this->get('register', '\App\Http\Controllers\HomeController@index')->name('register');
$this->post('register', 'Auth\RegisterController@register');
