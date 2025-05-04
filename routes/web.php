<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AgendaController;
use App\Http\Controllers\Web\InformationController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/agenda/{id}', [AgendaController::class, 'show'])->name('agenda.show');

Route::get('/informasi', [InformationController::class, 'index'])->name('informations.index');
Route::get('/informasi/{id}', [InformationController::class, 'show'])->name('informations.show');

Route::get('/profil/visi-misi', [ProfileController::class, 'visionMission'])->name('profile.vision-mission');
Route::get('/profil/fasilitas', [ProfileController::class, 'facilities'])->name('profile.facilities');
Route::get('/profil/dasar-hukum', [ProfileController::class, 'legalBasis'])->name('profile.legal-basis');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
