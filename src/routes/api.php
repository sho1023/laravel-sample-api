<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::middleware(['middleware' => 'api'])->group(function () {
    # 作成
    Route::post('/todo', 'TodoController@create');
    # 一覧
    Route::get('/todo', 'TodoController@list');
    # 単件
    Route::get('/todo/{id}', 'TodoController@get');
    // # 更新
    // Route::put('/todo/{id}' , 'TodoController@update');
    // # 削除
    // Route::delete('/todo/{id}', 'TodoController@delete');
});