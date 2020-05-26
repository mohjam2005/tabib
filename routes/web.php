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

Route::get('/desease', 'PagesController@desease');
Route::get('/desease/{id}', 'PagesController@desease');
Route::get('/adddesease', 'PagesController@adddesease');
Route::post('store', 'PagesController@store');
Route::get('/addcat', 'CategoryController@addcat');
Route::post('store1', 'CategoryController@store1');

Route::get('addpatient', 'Patient@addpatient');
Route::get('allpatient', 'DataController@allpatient');
Route::get('/states/get/{id}', 'Patient@getStates');

Route::post('store2', 'DataController@store2');
Route::post('store3', 'DataController@store3');
Route::post('store4', 'DataController@store4');
Route::get('/category/{id}', 'PagesController@category');

Route::get('dropdownlist','DataController@getCountries');
Route::get('dropdownlist/getstates/{id}','DataController@getStates');
Route::get('dropdownlist/getstates1/{id}','DataController@getStates1');
Route::get('searchD','DataController@getdeasese');
