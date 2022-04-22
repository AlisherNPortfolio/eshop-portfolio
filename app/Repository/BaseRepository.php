<?php

namespace App\Repositories\Base;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    public function __construct(protected Model $model)
    {
    }
}
