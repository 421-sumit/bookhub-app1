<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::post('book', [BookController::class, 'store'])->name('book.store');
    Route::get('book/create', [BookController::class, 'create'])->name('book.create');
    Route::get('books', [BookController::class, 'index'])->name('books.index');
    Route::get('book/{book}', [BookController::class, 'show'])->name('book.view');

    Route::get('book/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::patch('book/{book}', [BookController::class, 'update'])->name('book.update');
    Route::get('book/delete/{book}', [BookController::class, 'delete'])->name('book.delete');

});