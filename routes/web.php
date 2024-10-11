<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use Guzzle\Http\Client;
use App\Http\Controllers\LivrosController;

Route::get('/', function () {
    return redirect()->route("books.index");
});
Route::resource('books',BookController::class)->only(['index','show']);
Route::resource('books.reviews',ReviewController::class)
    ->scoped(['review','book'])
    ->only(['create','store']);


Route::get('/livros', [LivrosController::class, 'index'])->name('livros.index');
Route::get('/livros/cadastro', [LivrosController::class, 'cadastro'])->name('livros.cadastro');
Route::post('/livros', [LivrosController::class, 'store'])->name('livros.store');
