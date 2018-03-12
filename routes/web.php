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

Route::get('/meni', 'MeniController@index');
Route::get('/rezervacija','PagesController@rezervacija');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminLteController@admin');

Route::get('/admin/dodaj', 'AdminLteController@admindodaj');
Route::get('/admin/pregled', 'AdminLteController@adminpregled');
Route::get('/admin/pregl_meni', 'AdminLteController@adminpregledmeni');
Route::get('/admin/info', 'AdminLteController@admininfo');
Route::get('/admin/pregl_rez', 'AdminLteController@adminrez');
Route::get('/admin/pregled/urediUser', 'AdminLteController@adminPromKor');

Route::post('/admin/dodaj/spremi', 'MeniController@store');

Route::get('admin', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);

Route::get('admin', ['uses' => 'AdminLteController@admin', 'middleware' => ['auth', 'admin']]);
