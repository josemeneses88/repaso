<?php

use App\Http\Controllers\ViajeroController;
use Illuminate\Support\Facades\Route;

Route::resource('viajero',ViajeroController::class);
Route::get('/viajero/{id}/show', [ViajeroController::class, 'show'])->name('viajero.show');