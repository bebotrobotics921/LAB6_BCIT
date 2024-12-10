<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/articles', [ArticleController::class, 'store']);
Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'show']);
Route::put('/articles/{articles}', [ArticleController::class, 'update']);
Route::post('/articles', [ArticleController::class, 'delete']);