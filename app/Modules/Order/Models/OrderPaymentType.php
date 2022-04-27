<?php

namespace App\Modules\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPaymentType extends Model
{
    use HasFactory;

    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = ['order_id', 'payment_type_id'];

    public $timestamps = false;
}
