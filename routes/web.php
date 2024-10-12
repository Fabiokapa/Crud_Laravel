<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;

Route::get('/', [LivrosController::class, 'index'])->name('livros.index');
Route::get('/livros/cadastro', [LivrosController::class, 'cadastro'])->name('livros.cadastro');
Route::post('/livros', [LivrosController::class, 'store'])->name('livros.store');
Route::get('/livros/{livros}/editar', [LivrosController::class, 'editar'])->name('livros.editar');
