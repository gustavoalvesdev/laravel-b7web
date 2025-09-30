<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('inicio');
Route::get('/servicos', [SiteController::class, 'services'])->name('servicos');
Route::get('/contact', [SiteController::class, 'contact'])->name('contato');
