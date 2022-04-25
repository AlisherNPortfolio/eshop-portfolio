<?php

namespace App\Modules\Product\DbViews;

use App\DbViews\View;

class ProductList extends View
{
    public const STATUS_NEW = 1;
    public const STATUS_SALE = 2;
    public const STATUS_STANDARD = 3;

    protected $table = 'product_list';

    public function scopeActive($query)
    {
        return $query->where('stock_status', true);
    }

    public function scopeRecommended($query)
    {
        return $query->where('recommended', true);
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category_id', '=', $category);
    }

    public function scopeShop($query, $shopName)
    {
        return $query->where('shop_slug', '=', $shopName);
    }

    protected $casts = [
        'stock_status' => 'boolean',
        'recommended' => 'boolean'
    ];
}
