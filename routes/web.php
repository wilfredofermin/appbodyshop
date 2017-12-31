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
    return view('bienvenido');
});

//NOTIFICACION CON TOASTR | http://www.expertphp.in/article/laravel-5-3-notification-message-popup-using-toastr-js-plugin-with-demo
Route::get('notification', 'SolicitudController@notification');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/solicitud','SolicitudController');

Route::resource('/incidencias','IncidenciasController');

Route::get('/peticion','PeticionesController@index');

Route::get('/administrar','AdminController@index');

//API DE SERVICIOS
Route::get('/solicitud/{id}/category', 'SolicitudController@byCategory');
Route::get('/solicitud/{id}/subcategory', 'SolicitudController@bySubCategory');


Route::group(['middleware'=>'admin','namespace'=>'Admin'],function(){


});