<?php

namespace App\Modules\Cart\DbViews;

use App\DbViews\View;

class CartView extends View
{
    protected $table = 'cart_views';

    public function scopeByUserId($query, $id)
    {
        return $query->where('user_id', '=', $id);
    }
}
