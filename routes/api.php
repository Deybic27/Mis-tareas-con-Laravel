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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/listProducts', 'App\Http\Controllers\apiController@listProducts');
Route::post('/product/{ids}', 'App\Http\Controllers\apiController@product');

use App\Http\Controllers\Api\V1\TodosController as TodoV1;
use App\Http\Controllers\Api\V2\TodosController as TodoV2;

Route::apiResource('V1/todos', TodoV1::class)
    ->only(['index','show','destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('V2/todos', TodoV2::class)
    ->only(['index','show'])
    ->middleware('auth:sanctum');

Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);

use App\Http\Controllers\Api\V1\PostController as PostV1;

Route::apiResource('V1/post', PostV1::class)
    ->only(['show']);
;