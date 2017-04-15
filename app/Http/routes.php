<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('sch_imp', 'HomeController@sch_imp');
Route::post('sch_imp','HomeController@store');
Route::post('update/{id}','HomeController@update');
Route::get('del/sch_imp/{id}', 'HomeController@del_sch_imp');
Route::get('data_shipment','HomeController@data');
Route::get('data_supplier','HomeController@data2');
Route::get('data_origin','HomeController@data3');
Route::get('data_ship','HomeController@data4');
Route::get('data_category','HomeController@data5');
Route::get('data_currency','HomeController@data6');
Route::get('data_forwader','HomeController@data7');
Route::get('edit/sch_imp/{id}','HomeController@edit');
Route::get('data1','HomeController@data1');
Route::get('emailreminder','HomeController@sendEmailReminder');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

