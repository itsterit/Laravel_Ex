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
    return view('welcome');
});
Route::get('/RentAct', function () {
    return view('RentAct');
});

Auth::routes();
Route::get('/home', 'CharacteristicHandler@SearchCharacteristic');
Route::get('/StoreDataHandler', 'StoreDataHandler@index');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/car', 'CharacteristicHandler@SearchCharacteristic');