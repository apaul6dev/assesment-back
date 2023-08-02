<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::get('/v1/products',[App\Http\Controllers\ProductController::class, 'index']);
Route::post('/v1/products/save',   [App\Http\Controllers\ProductController::class, 'store']);
Route::put('/v1/products/update/{id}',[App\Http\Controllers\ProductController::class, 'update']);
Route::delete('/v1/products/delete/{id}',[App\Http\Controllers\ProductController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
