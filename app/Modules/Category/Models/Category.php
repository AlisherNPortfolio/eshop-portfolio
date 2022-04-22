<?php

namespace App\Modules\Category\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lft', 'rgt', 'depth', 'parent_id'];

    public $timestamps = false;

    public function parent()
    {
        return $this->belongsTo(self::class);
    }
}
