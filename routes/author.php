<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::post('author', [AuthorController::class, 'store'])->name('author.store');
    Route::get('author/create', [AuthorController::class, 'create'])->name('author.create');
    Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
    Route::get('author/{author}/edit', [AuthorController::class, 'edit'])->name('author.edit');
    Route::patch('author/{author}', [AuthorController::class, 'update'])->name('author.update');
});