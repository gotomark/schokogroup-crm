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

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
	
Route::resource('/customer','Admin\CustomerController');
Route::resource('/booking','Admin\BookingController');

});







Route::get('/', function () {
    return view('welcome');
});
Route::get('/queue-add','HomeController@test');

Route::get('/queue-check', function () {
    //
});