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

Route::get('/user', function (Request $request) {
    return App\User::all();
});

Route::apiResource('/products','ProductController')->middleware('auth:api');

/*Route::get('/test', function(){
return response()->json([
  'user'=>[
    'firstName' => 'Avinash',
    'lastName' => 'Singh'
]
]);
});*/
