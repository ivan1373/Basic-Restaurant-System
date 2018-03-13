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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminLteController@admin');

Route::get('/admin/dodaj', 'AdminLteController@admindodaj');
Route::get('/admin/pregled', 'AdminLteController@adminpregled');
Route::get('/admin/pregl_meni', 'AdminLteController@adminpregledmeni');
Route::get('/admin/info', 'AdminLteController@admininfo');
Route::get('/admin/pregl_rez', 'AdminLteController@adminrez');
Route::get('/admin/pregled/urediUser/{id}', 'UserController@edit');
//Route::get('/admin/pregl_meni/urediUser/{id}', 'UserController@edit');

Route::post('/admin/dodaj/spremi', 'MeniController@store');
Route::get('/admin/pregl_meni/brisi/{id}','MeniController@destroy');
Route::get('/admin/pregled/brisi/{id}','UserController@destroy');

Route::get('admin', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);

Route::get('admin', ['uses' => 'AdminLteController@admin', 'middleware' => ['auth', 'admin']]);
