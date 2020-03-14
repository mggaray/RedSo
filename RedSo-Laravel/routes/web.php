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

// use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get("perfil", function(){
    return view ("perfil");
});

Route::get("logout", "Auth\LoginController@logout");







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
