<?php

use Illuminate\Support\Facades\Route;

Route::prefix('site')->group(function () {
    Route::prefix('cart')->group(function () {
        Route::controller(CartController::class)->group(function () {
            Route::get('/{user_id}', 'getProducts');
        });
    });
});
