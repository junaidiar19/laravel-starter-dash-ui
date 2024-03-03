<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('/BhajsyTvs75HAu')->name('admin.')->group(function () {
  // login Admin
  Route::get('/login', [AuthController::class, 'index'])->name('login');
  Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

  Route::middleware(['auth', 'role:super admin|admin'])->group(function () {
    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // dashboard
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
  });
});
