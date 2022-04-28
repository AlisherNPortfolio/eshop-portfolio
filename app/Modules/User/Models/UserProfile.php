<?php

namespace App\Modules\User\Models;

use App\Modules\Setting\Models\District;
use App\Modules\Setting\Models\Region;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'full_name', 'username', 'profile_image',
        'phone', 'region_id', 'district_id', 'address', 'bio',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
