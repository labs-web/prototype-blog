<?php

use Illuminate\Support\Facades\Route;
use Modules\Core\Controllers\AdminController;


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
});