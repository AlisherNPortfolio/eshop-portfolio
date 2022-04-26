<?php

use Illuminate\Support\Facades\Route;

Route::prefix('site')->group(function () {
    Route::prefix('brands/{shop_name}')->group(function () {
        Route::controller(BrandController::class)->group(function () {
            Route::get('/', 'items');
        });
    });
});
