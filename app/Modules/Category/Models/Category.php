<?php

namespace App\Modules\Category\Models;

use App\Models\User;
use App\Modules\Shop\Models\Shop;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lft', 'rgt', 'depth', 'parent_id', 'user_id', 'shop_id', 'status'];

    public $timestamps = false;

    protected $casts = [
        'status' => 'boolean'
    ];

    public function parent()
    {
        return $this->belongsTo(self::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeShop($query, $shopName)
    {
        return $query->whereHas('shop', function ($q) use ($shopName) {
            $q->where('unique_name', '=', $shopName);
        });
    }

    public function scopeOnlyChildren($query)
    {
        return $query->whereNotNull('parent_id');
    }
}
