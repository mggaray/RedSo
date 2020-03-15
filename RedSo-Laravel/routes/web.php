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


Route::get('/', "HomeController@index");

Route::get("perfil", "PerfilController@perfil");

Route::get("faq", function(){
    return view ("faq");
});

Route::get("logout", "Auth\LoginController@logout");


Route::get('contacto', function () {
    return view('contacto');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
