<?php

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
Route::get('/products', [\App\Http\Controllers\Api\ProductController::class, 'index'])
    ->name('products.index');
Route::get('/products/{key}', [\App\Http\Controllers\Api\ProductController::class, 'show'])
    ->name('products.show');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
