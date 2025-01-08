<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //menambahkan controller ke web.php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\InformasiSampahController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('auth.register'); // Halaman pendaftaran
})->name('register');

Route::get('/login', function () {
    return view('auth.login'); // Halaman login
})->name('login');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/usermanagement', [UserManagementController::class, 'index'])->name('admin.usermanagement.index');
    Route::delete('/admin/usermanagement/{user}', [UserManagementController::class, 'destroy'])->name('admin.usermanagement.destroy');
    Route::get('/admin/usermanagement/{user}/edit', [UserManagementController::class, 'edit'])->name('admin.usermanagement.edit');
    Route::put('/admin/usermanagement/{user}', [UserManagementController::class, 'update'])->name('admin.usermanagement.update');
});



route::get('admin/dashboard',[HomeController::class, 'index'])->middleware(['auth','admin'])->name('admin.dashboard');;//deklarasikan middleware admin
//nama class 'index' harus disambungkan ke controller masing-masing

Route::resource('admin/informasisampah', InformasiSampahController::class, [
    'as' => 'admin',
    'parameters' => ['informasisampah' => 'sampah']
]);
require __DIR__.'/auth.php';