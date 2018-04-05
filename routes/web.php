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

Route::get('/', 'PagesController@index');

Route::get('/meni', 'PagesController@meni');
Route::get('/rezervacija','PagesController@rezervacija');
Route::get('/vizija','PagesController@vizija');
Route::get('/recenzije','PagesController@rec');
Route::get('/create_rec','PagesController@stvoriRec');
Route::post('/create_rec/spremiRec','RecenzijeController@store');

Route::get('/admin', 'AdminLteController@admin');
Route::get('/admin/recenzije','AdminLteController@recenzije');
Route::get('/admin/dodaj', 'AdminLteController@admindodaj');
Route::get('/admin/pregled', 'AdminLteController@adminpregled');
Route::get('/admin/pregl_meni', 'AdminLteController@adminpregledmeni');
Route::get('/admin/info', 'AdminLteController@admininfo');
Route::get('/admin/pregl_rez', 'AdminLteController@adminrez');
Route::get('/admin/pregled/urediUser/{id}', 'UserController@edit');
Route::get('/admin/pregl_meni/urediMeni/{id}', 'MeniController@edit');
Route::put('/admin/pregled/urediUser/{id}','UserController@update');
Route::put('/admin/info/{id}','UserController@updateAdmin');
Route::put('/admin/pregl_meni/urediMeni/{id}','MeniController@update');
Route::post('/admin/dodaj/spremi', 'MeniController@store');
Route::get('/admin/pregl_meni/brisi/{id}','MeniController@destroy');
Route::get('/admin/pregled/brisi/{id}','UserController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//osigurava da samo admin moze pristupiti navedenim stranicama
Route::get('admin', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";

}]);


Route::get('admin', ['uses' => 'AdminLteController@admin', 'middleware' => ['auth', 'admin']]);
Route::get('admin/recenzije', ['uses' => 'AdminLteController@recenzije', 'middleware' => ['auth', 'admin']]);
Route::get('admin/dodaj', ['uses' => 'AdminLteController@admindodaj', 'middleware' => ['auth', 'admin']]);
Route::get('admin/pregl_meni', ['uses' => 'AdminLteController@adminpregledmeni', 'middleware' => ['auth', 'admin']]);
Route::get('admin/info', ['uses' => 'AdminLteController@admininfo', 'middleware' => ['auth', 'admin']]);
Route::get('admin/pregl_rez', ['uses' => 'AdminLteController@adminrez', 'middleware' => ['auth', 'admin']]);
