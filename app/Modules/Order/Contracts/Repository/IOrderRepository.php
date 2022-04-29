<?php

namespace App\Modules\Order\Contracts\Repository;

use App\Modules\Order\Models\Order;

interface IOrderRepository
{
    public function addItem(array $params): Order|bool;
}
