<?php

namespace App\Modules\Cart\Repository;

use App\Modules\Cart\Contracts\Repository\ICartRepository;
use App\Modules\Cart\Models\Cart;
use App\Repository\BaseRepository;

class CartRepository extends BaseRepository implements ICartRepository
{
    public function __construct(Cart $model)
    {
        parent::__construct($model);
    }
}
