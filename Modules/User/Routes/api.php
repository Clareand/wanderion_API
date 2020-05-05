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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['prefix' => 'user','middleware'=>'cors'], function (){
    Route::get('/test', 'UserController@connTest');
    Route::get('/', 'UserController@index');
    Route::post('/store', 'UserController@store');
    Route::get('/find/{id}', 'UserController@show');
    Route::get('/cancel/{id}', 'UserController@destroy');
    Route::post('/moonPhase', 'UserController@moonPhase');
});