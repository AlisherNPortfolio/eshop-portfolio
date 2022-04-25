<?php

namespace App\Modules\Product\DbViews;

use App\Models\Shop\ProductImage;

class ProductView extends ProductList
{
    protected $table = 'product_details';

    public function scopeProduct($query, $slug)
    {
        return $query->where('unique_name', '=', $slug);
    }

    public function scopeShop($query, $shop)
    {
        return $query->where('shop_unique_name', '=', $shop);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
