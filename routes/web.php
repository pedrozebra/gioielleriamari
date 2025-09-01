<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home']);

Route::get('/prodotti', [PageController::class, 'products'])->name('prodotti');
Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
