<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public $fillable = ['name', 'unique_name'];

    public $timestamps = false;

    public function items()
    {
        return $this->hasMany(OptionItem::class);
    }
}
