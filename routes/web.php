<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home']);

Route::get('/chi-siamo', [PageController::class, 'whoWeAre'])->name('chi-siamo');
Route::get('/contatti', [PageController::class, 'contacts'])->name('contatti');
Route::get('/prodotti', [PageController::class, 'products'])->name('prodotti');
