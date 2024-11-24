<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

 
Auth::routes();
Route::get('/', [AdminController::class, 'index']);