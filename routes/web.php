<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RepairTrackerController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/prodotti', [PageController::class, 'prodotti'])->name('prodotti');

Route::get('/prodotti/{product:slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/prodotti/c/{category}', [ProductController::class, 'indexByCategory'])->name('products.category');

Route::get('/stato-riparazione', [RepairTrackerController::class, 'index'])->name('stato-riparazione');

Route::get('/contatti', [ContactController::class, 'create'])->name('contatti');
Route::post('/contatti', [ContactController::class, 'store'])->name('contatti.store');
Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
