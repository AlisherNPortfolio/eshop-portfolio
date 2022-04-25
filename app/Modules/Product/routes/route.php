<?php

use Illuminate\Support\Facades\Route;

Route::prefix('site')->group(function () {
    // Route::get('banner', [BannerController::class, 'getBanner']);

    // products
    Route::prefix('products/{shop_name}')->group(function () {
        Route::controller(ProductController::class)->group(function () {
            Route::get('/', 'getHomeItems');
            Route::get('/category/{catId}', 'getCategoryItems');
            Route::get('/recommended', 'getRecommendedItems');
            Route::get('/{slug}', 'getItem');
        });
    });

    // Route::prefix('cart')->group(function () {
    //     Route::controller(CartController::class)->group(function () {
    //         Route::get('products/{user_id}', 'getProducts');
    //     });
    // });
});
