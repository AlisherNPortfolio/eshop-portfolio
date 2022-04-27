<?php

namespace App\Modules\Cart\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Cart\Contracts\Repository\ICartViewRepository;
use App\Modules\Cart\Resources\CartResource;
use Exception;

class CartController extends Controller
{
    protected $viewRepository;

    public function __construct(ICartViewRepository $viewRepository)
    {
        $this->viewRepository = $viewRepository;
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
}
