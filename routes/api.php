<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SimpleData;
use \App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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

Route::get('/posts',[PostController::class,'index']);


Route::get('/read-data',[SimpleData::class,'index'])->middleware('check-age');
Route::post('/modify-data',[SimpleData::class,'update']);


Route::get('/home',[HomeController::class,'index']);
Route::get('/home/{id}',[HomeController::class,'show']);
Route::post('/home',[HomeController::class,'store']);
Route::put('/home/{id}',[HomeController::class,'update']);
Route::delete('/home/{id}',[HomeController::class, 'destroy']);
