<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', [LoginController::class, 'login']);
Route::post('me', [LoginController::class, 'me']);
Route::resource('books', BooksController::class);
Route::post('/books/search', [BooksController::class, 'search']);
