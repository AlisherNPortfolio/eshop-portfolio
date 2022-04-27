<?php

namespace App\Modules\Cart\Contracts\Repository;

use App\Modules\Cart\Models\Cart;

interface ICartRepository
{
    public function add(array $data): Cart;

    public function checkHasProduct(int $product_id): Cart;

    public function incrementCartItemCount(int $cart_id): bool;

    public function decrementCartItemCount(int $cart_id): bool|int;
}
