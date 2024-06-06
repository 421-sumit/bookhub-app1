<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::post('customer', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('customer/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('customer/{customer}', [CustomerController::class, 'show'])->name('customer.view');
    Route::get('customer/{customer}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::patch('customer/edit/{customer}', [CustomerController::class, 'update'])->name('customer.update');
    Route::get('customer/delete/{customer}', [CustomerController::class, 'delete'])->name('customer.delete');
});