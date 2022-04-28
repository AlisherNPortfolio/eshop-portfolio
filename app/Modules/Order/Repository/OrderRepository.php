<?php

namespace App\Modules\Order\Repository;

use App\Modules\Order\Contracts\Repository\IOrderRepository;
use App\Modules\Order\Models\Order;
use App\Repository\BaseRepository;

class OrderRepository extends BaseRepository implements IOrderRepository
{
    protected $model;

    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    public function addItem(array $params): Order
    {
        return $this->model->first();
    }
}
