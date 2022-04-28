<?php

use App\Modules\Cart\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::prefix('site/cart')->group(function () {
    Route::get('/by-user/{user_id}', [CartController::class, 'getProducts']);

    Route::middleware('auth:api')->group(function () {
        Route::get('/list', [CartController::class, 'getUserProducts']);
        Route::post('/add', [CartController::class, 'addItem']);
        Route::post('/increment', [CartController::class, 'incrementProductCount']);
        Route::post('/decrement', [CartController::class, 'decrementProductCount']);
        Route::get('/details', [CartController::class, 'getCartDetails']);
    });
});
