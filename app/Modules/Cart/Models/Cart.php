<?php

namespace App\Modules\Cart\Models;

use App\Modules\Product\Models\Product;
use App\Modules\Product\Models\ProductOptionItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['product_option_item_id', 'total_sum', 'qty', 'user_id'];

    public function products()
    {
        return $this->hasManyThrough(Product::class, ProductOptionItem::class);
    }
}
