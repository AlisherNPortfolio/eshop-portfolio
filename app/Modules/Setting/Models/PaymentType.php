<?php

namespace App\Modules\Setting\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'status'];

    public $timestamps = false;

    protected $casts = [
        'status' => 'boolean'
    ];
}
