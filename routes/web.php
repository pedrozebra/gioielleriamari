<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-siamo', [PageController::class, 'whoWeAre'])->name('chi-siamo');
Route::get('/contatti', [PageController::class, 'contatti'])->name('contatti');
Route::get('/prodotti', [PageController::class, 'prodotti'])->name('prodotti');
