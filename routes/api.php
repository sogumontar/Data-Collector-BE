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
Route::get('/findAll','App\Http\Controllers\PesanController@find');
Route::get('/trending/findAll','App\Http\Controllers\TrendingController@findAllTrending');
Route::get('/trending/{nomor}','App\Http\Controllers\TrendingController@findDetailTrending');

Route::post('/store','App\Http\Controllers\PesanController@store');
Route::post('/search/{nomor}','App\Http\Controllers\PesanController@search');

Route::put('/admin/approval/{id}','App\Http\Controllers\PesanController@approval');
Route::get('/admin/findAll','App\Http\Controllers\PesanController@findDataInAdmin');
