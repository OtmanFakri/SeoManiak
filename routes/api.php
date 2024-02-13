<?php

use App\Http\Controllers\Articles\delete;
use App\Http\Controllers\Articles\index;
use App\Http\Controllers\Articles\show;
use App\Http\Controllers\Articles\store;
use App\Http\Controllers\Articles\update;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'middleware' => 'api',
], function ($router) {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::get('user-profile', 'App\Http\Controllers\AuthController@userProfile');
});




//Route::get('articles', 'App\Http\Controllers\ArticleController@index');


Route::get('articles', index::class);
Route::post('articles', store::class);
Route::get('articles/{article}', show::class);
Route::put('articles/{article}', update::class);
Route::delete('articles/{article}', delete::class);



