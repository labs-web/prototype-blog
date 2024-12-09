<?php

use Illuminate\Support\Facades\Route;
use Modules\Core\Controllers\DashboardController;

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});