<?php

namespace App\Modules\Cart\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Cart\Contracts\Repository\ICartRepository;
use App\Modules\Cart\Contracts\Repository\ICartViewRepository;
use App\Modules\Cart\Requests\CartAddRequest;
use App\Modules\Cart\Requests\ChangeProductCountRequest;
use App\Modules\Cart\Resources\CartAddedItemResource;
use App\Modules\Cart\Resources\CartResource;
use App\Utils\ErrorMessages;
use Exception;

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

            $productExists = $this->repository->checkHasProduct($data['product_id']);

            if ($productExists) {
                return error_response(
                    'Siz bu mahsulotni savatingizga qo\'shgansiz'
                );
            }

            return success_response(
                new CartAddedItemResource(
                    $this->repository->add($data)
                )
            );
        } catch (Exception $e) {
            return $this->cantCreateResourceError($e);
        }
    }

    public function incrementProductCount(ChangeProductCountRequest $request)
    {
        try {
            $data = $request->validated();

            return success_response(
                $this->repository->incrementCartItemCount($data['cart_id'])
            );

        } catch (Exception $e) {
            return $this->cantUpdateResourceError($e);
        }
    }

    public function decrementProductCount(ChangeProductCountRequest $request)
    {
        try {
            $data = $request->validated();

            $result = $this->repository
                            ->decrementCartItemCount($data['cart_id']);

            if ($result === -1) {
                return error_response(
                    'Mahsulotni savatchadan olib tashalang'
                );
            }

            return success_response($result);

        } catch (Exception $e) {
            return $this->cantUpdateResourceError($e);
        }
    }
}
