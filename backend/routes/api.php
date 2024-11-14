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

Route::get('catalog/top', [\App\Http\Controllers\CatalogController::class, 'top']);
Route::get('catalog/{id}', [\App\Http\Controllers\CatalogController::class, 'info']);
Route::get('catalog', [\App\Http\Controllers\CatalogController::class, 'index']);

Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index']);
