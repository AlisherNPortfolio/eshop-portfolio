<?php

namespace App\Modules\Brand\Models;

use App\Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo'];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
