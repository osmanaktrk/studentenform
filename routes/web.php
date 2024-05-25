<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function (){
    Route::post('/profile-photo.upload', [UserController::class, 'photoUpload'])->name("profile-photo.upload");
    Route::get('/profile-photo.deleted', [UserController::class, 'photoDelete'])->name("profile-photo.delete");
    Route::patch('/profile-education.upload', [UserController::class, 'educationUpdate'])->name('profile-education.upload');
});



require __DIR__.'/auth.php';
