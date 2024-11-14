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

Route::prefix('catalog')->group(function () {
    Route::get('top', [\App\Http\Controllers\CatalogController::class, 'top']);
    Route::get('{id}', [\App\Http\Controllers\CatalogController::class, 'info']);
    Route::get('', [\App\Http\Controllers\CatalogController::class, 'index']);
    Route::post('', [\App\Http\Controllers\CatalogController::class, 'create']);
});

Route::prefix('categories')->group(function () {
    Route::get('', [\App\Http\Controllers\CategoryController::class, 'index']);
    Route::get('{id}', [\App\Http\Controllers\CategoryController::class, 'info']);
});
