<?php

namespace App\Modules\Order\Models;

use App\Modules\Product\Models\ProductOptionItem;
use App\Modules\Setting\Models\District;
use App\Modules\Setting\Models\Region;
use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'seller_id', 'delivery_region_id', 'delivery_district_id',
        'customer_comment', 'seller_comment', 'total_price', 'status',
        'payment_status', 'has_installment', 'initial_payment', 'installment_months'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function seller()
    {
        return $this->belongsTo(User::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'delivery_region_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'delivery_district_id');
    }

    public function products()
    {
        return $this->hasManyThrough(ProductOptionItem::class, OrderItem::class);
    }
}
