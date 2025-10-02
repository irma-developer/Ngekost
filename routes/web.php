<?php

use App\Http\Controllers\BoardingHouseController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/kos/{slug}', [BoardingHouseController::class, 'show'])->name('kos.show');

Route::get('/find-kos', [BoardingHouseController::class, 'find'])->name('find-kos');
Route::get('/find-results', [BoardingHouseController::class, 'findResults'])->name('find-kos.results');

Route::get('/check-booking', [BookingController::class, 'check'])->name('check-booking');
Route::post('/check-booking', [BookingController::class, 'show'])->name('check-booking.show');
