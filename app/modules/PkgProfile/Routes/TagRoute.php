<?php
// Ce fichier est maintenu par ESSARRAJ Fouad



use Illuminate\Support\Facades\Route;
use Modules\PkgProfile\Controllers\TagController;

// routes for tag management
Route::middleware('auth')->group(function () {
    Route::prefix('/admin/PkgProfile')->group(function () {

        Route::get('tags/getTags', [TagController::class, 'getTags'])->name('tags.all');
        Route::resource('tags', TagController::class);
        // Routes supplémentaires avec préfixe
        Route::prefix('data')->group(function () {
            Route::get('tags/export', [TagController::class, 'export'])->name('tags.export');
            Route::post('tags/import', [TagController::class, 'import'])->name('tags.import');
        });
    });
});
