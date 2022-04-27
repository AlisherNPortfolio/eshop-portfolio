<?php

namespace App\Modules\Cart\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Cart\Contracts\Repository\ICartRepository;
use App\Modules\Cart\Contracts\Repository\ICartViewRepository;
use App\Modules\Cart\Requests\CartAddRequest;
use App\Modules\Cart\Resources\CartAddedItemResource;
use App\Modules\Cart\Resources\CartResource;
use App\Utils\ErrorMessages;
use Exception;
use PDOException;

class CartController extends Controller
{
    protected $viewRepository;

    protected $repository;

    public function __construct(ICartViewRepository $viewRepository, ICartRepository $repository)
    {
        $this->viewRepository = $viewRepository;
        $this->repository = $repository;
    }

    public function getProducts($user_id)
    {
        try {
            $cartItems = $this->viewRepository->getItems($user_id);

            if (!$cartItems) {
                return error_response(
                    $this->cantGetResourceError()
                );
            }

            return success_response(
                CartResource::collection($cartItems)
            );
        } catch (Exception $e) {
            return error_response(
                $this->cantGetResourceError($e)
            );
        }
    }

    public function addItem(CartAddRequest $request)
    {
        try {
            $data = $request->validated();

            return success_response(
                new CartAddedItemResource(
                    $this->repository->add($data)
                )
            );
        } catch (Exception $e) {
            return error_response(
                ErrorMessages::CAN_NOT_CREATE_MSG,
                ErrorMessages::CAN_NOT_CREATE,
                $e->getMessage()
            );
        }
    }
}
