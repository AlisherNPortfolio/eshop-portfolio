<?php

namespace App\Modules\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionItem extends Model
{
    use HasFactory;

    public $fillable = ['option_id', 'value', 'is_translatable'];

    public $timestamps = false;

    protected $casts = [
        'is_translatable' => 'boolean'
    ];

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
