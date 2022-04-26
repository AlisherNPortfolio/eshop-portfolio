<?php

use Illuminate\Support\Facades\Route;

Route::prefix('site/categories/{shop_name}')->group(function () {
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/', 'getItems');
        Route::get('/hierarchy', 'getTreeHierarchy');
    });
});
