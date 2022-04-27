<?php

namespace App\Modules\Setting\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'status'];

    public $timestamps = false;

    protected $casts = [
        'status' => 'boolean'
    ];

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', '=', true);
    }
}
