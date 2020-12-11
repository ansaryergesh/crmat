<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('banks', 'BankController@index');
Route::get('banks/{id}', 'BankController@getBank');
Route::post('banks', 'BankController@createBank');
Route::put('banks/{id}', 'BankController@updateBank');
Route::delete('banks/{id}', 'BankController@deleteBank');