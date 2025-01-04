<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\HomeController::class)->name('home');
Route::get('/FlashSale', Controllers\FlashsaleController::class)->name('flashsale');
Route::get('/Mentor', Controllers\MentorController::class)->name('mentor');
Route::get('/Career', Controllers\CareerController::class)->name('career');
Route::get('/Class/Math', Controllers\ClassMathController::class)->name('classMath');
Route::get('/Class/Science', Controllers\ClassScienceController::class)->name('classScience');
Route::get('/Class/English', Controllers\ClassEnglishController::class)->name('classEnglish');
Route::get('/Class/Indonesia', Controllers\ClassIndonesiaController::class)->name('classIndonesia');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
