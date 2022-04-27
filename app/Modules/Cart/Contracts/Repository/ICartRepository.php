<?php

namespace App\Modules\Cart\Contracts\Repository;

use App\Modules\Cart\Models\Cart;

interface ICartRepository
{
    public function add(array $data): Cart;
}
