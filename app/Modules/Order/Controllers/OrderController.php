<?php

namespace App\Modules\Order\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Order\Contracts\Repository\IOrderRepository;
use App\Modules\Order\Requests\OrderAddRequest;
use Exception;

class OrderController extends Controller
{
    protected $repository;

    public function __construct(IOrderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function add(OrderAddRequest $request)
    {
        try {
            $data = $request->validated();

            return success_response(
                $this->repository->addItem($data)
            );
        } catch (Exception $e) {
            return $this->cantCreateResourceError($e);
        }
    }
}
