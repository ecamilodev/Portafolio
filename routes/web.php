<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/proyectos', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/proyectos/{slug}', [PortfolioController::class, 'showProject'])->name('projects.show');
Route::get('/contacto', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contacto', [PortfolioController::class, 'sendMessage'])->name('contact.send');
