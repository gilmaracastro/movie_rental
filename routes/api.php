<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('list', 'MovieRentalController@list');
Route::get('edit/{id}', 'MovieRentalController@edit');
Route::post('save', 'MovieRentalController@save');
Route::put('update/{id}', 'MovieRentalController@update');
Route::delete('delete/{id}', 'MovieRentalController@delete');
Route::get('show/{id}', 'MovieRentalController@show');
