<?php

use App\Http\Controllers\PredictionController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';

Route::get('/', [PredictionController::class, 'create'])->name('home');


Route::get('/predictions', [PredictionController::class, 'customerIndex'])->name('predictions.customer');
Route::get('/predictions/admin', [PredictionController::class, 'index'])->name('predictions.index');
Route::post('/predictions', [PredictionController::class, 'store'])->name('predictions.store');

Route::put('/predictions/{prediction}/toggle-payment', [PredictionController::class, 'update'])->name('predictions.toggle-payment');

Route::get('/predictions/thankyou', [PredictionController::class, 'thankyou'])->name('predictions.thankyou');
