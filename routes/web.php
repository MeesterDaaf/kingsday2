<?php

use App\Http\Controllers\PredictionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PredictionController::class, 'create'])->name('home');

Route::get('/predictions', [PredictionController::class, 'customerIndex'])->name('predictions.customer');
Route::post('/predictions', [PredictionController::class, 'store'])->name('predictions.store');

Route::put('/predictions/{prediction}/toggle-payment', [PredictionController::class, 'update'])->name('predictions.toggle-payment');

Route::get('/predictions/thankyou', [PredictionController::class, 'thankyou'])->name('predictions.thankyou');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/predictions/admin', [PredictionController::class, 'index'])->name('predictions.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
