<?php

namespace App\Modules\Order\Models;

use App\Modules\Product\Models\ProductOptionItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_option_item_id', 'price', 'qty'];

    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function items()
    {
        return $this->hasMany(ProductOptionItem::class);
    }
}
