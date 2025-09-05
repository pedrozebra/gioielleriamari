<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RepairTrackerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home']);

Route::get('/prodotti', [PageController::class, 'products'])->name('prodotti');
Route::get('/contatti', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contatti', [ContactController::class, 'store'])->name('contact.store');
Route::get('/cerca-riparazione', [RepairTrackerController::class, 'index'])->name('repair.search');

#must be at the end of routes
Route::get('/{page:slug}', [PageController::class, 'show'])->name('page.show');
