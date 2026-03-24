<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('pages.about', ['name' => $name = "Antra", 'age' => $age = 27]);
});

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/books/{id}/edit', [BookController::class, 'edit']);
Route::put('/books/{id}/update', [BookController::class, 'update']);
Route::delete('/books/{id}/delete', [BookController::class, 'delete']);