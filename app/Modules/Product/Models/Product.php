<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    public const STATUS_NEW = 1;
    public const STATUS_SALE = 2;
    public const STATUS_STANDARD = 3;

    protected $fillable = [
        'user_id', 'brand_id', 'shop_id', 'category_id',
        'name', 'description', 'sku', 'rating', 'price',
        'quantity', 'stock_status', 'product_status',
        'image', 'has_attribute'
    ];

    protected $casts = [
        'has_attribute' => 'boolean',
        'stock_status' => 'boolean',
        'recommended' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function variants()
    {
        return $this->belongsToMany(ProductOptionItem::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
