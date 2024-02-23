<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'index']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);



