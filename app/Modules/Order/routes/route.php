<?php

use App\Modules\Order\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::prefix('site/order')->group(function () {
    Route::middleware('auth:api')->group(function () {
        Route::post('/', [OrderController::class, 'add']);
    });
});
