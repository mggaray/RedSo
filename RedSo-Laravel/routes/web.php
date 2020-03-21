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

Route::get('/', "HomeController@index");

Route::get("perfil", "PerfilController@perfil"); 

Route::get('/busquedaUser','perfilController@mostrarBusqueda'); 
Route::post('/busquedaUser', 'perfilController@buscarUsuario'); 

Route::get('/users/{id}','perfilController@mostrarUser');  

Route::get('/seguirUsuario/{id}', 'perfilController@agregarUsuario'); 
Route::get('/dejarUsuario/{id}', 'perfilController@dejarUsuario');


Route::get("faq", function(){
    return view ("faq");
});

Route::get("logout", "Auth\LoginController@logout");


Route::get('contacto', function () {
    return view('contacto');
}); 

Route::get('/home', function(){
    return view('home');
});

Route::post('/home', 'HomeController@postear');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
