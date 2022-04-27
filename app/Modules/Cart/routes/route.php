<?php

use App\Modules\Cart\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::prefix('site/cart')->group(function () {
    Route::get('/{user_id}', [CartController::class, 'getProducts']);

    Route::middleware('auth:api')->group(function () {
        Route::post('/add', [CartController::class, 'addItem']);
    });
});
