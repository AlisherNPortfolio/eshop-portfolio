<?php

namespace App\Modules\Shop\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'logo',
        'address', 'phone', 'email',
        'unique_name', 'social_links'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
