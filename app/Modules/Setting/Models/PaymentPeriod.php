<?php

namespace App\Modules\Setting\Models;

use App\Modules\User\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentPeriod extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'month_period', 'min_initial_price'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
