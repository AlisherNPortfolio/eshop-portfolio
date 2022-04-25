<?php

namespace App\Modules\Product\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Product\Contracts\Repository\IProductDetailsRepository;
use App\Modules\Product\Contracts\Repository\IProductListRepository;
use App\Modules\Product\Resources\ProductListResource;
use App\Utils\ErrorMessages;
use Illuminate\Http\Request;
use PDOException;

class ProductController extends Controller
{
    protected $repository;

    protected $detailsRepository;

    public function __construct(
        IProductListRepository $repository,
        IProductDetailsRepository $detailsRepository
    ) {
        $this->repository = $repository;
        $this->detailsRepository = $detailsRepository;
    }

    public function getHomeProducts(Request $request, string $shop_name, int $limit = 6)
    {
        try {
            $data = $this->repository->getLimitedProducts($shop_name, $limit);
            return $this->successResponse(
                ProductListResource::collection($data)
            );
        } catch (PDOException $e) {
            return $this->errorResponse(
                ErrorMessages::CAN_NOT_GET_RESOURCE_MSG,
                ErrorMessages::CAN_NOT_GET_RESOURCE,
                $e->getMessage()
            );
        }
    }

    public function getRecommendedItems(Request $request, string  $shop_name, int $limit)
    {
        try {
            $data = $this->repository->getRecommendedProducts($shop_name, $limit);
            return $this->successResponse(
                ProductListResource::collection($data)
            );
        } catch (PDOException $e) {
            return $this->errorResponse(
                ErrorMessages::CAN_NOT_GET_RESOURCE_MSG,
                ErrorMessages::CAN_NOT_GET_RESOURCE,
                $e->getMessage()
            );
        }
    }

    public function getCategoryItems(Request $request, string $shop_name, int $categoryId, int $limit = 6)
    {
        try {
            $data = $this->repository->getByCategory($shop_name, $categoryId, $limit);
            return $this->successResponse(
                ProductListResource::collection($data)
            );
        } catch (PDOException $e) {
            return $this->errorResponse(
                ErrorMessages::CAN_NOT_GET_RESOURCE_MSG,
                ErrorMessages::CAN_NOT_GET_RESOURCE,
                $e->getMessage()
            );
        }
    }

    public function getProduct(Request $request, $shop_name, $slug)
    {
        try {
            $data = $this->detailsRepository->getProduct($shop_name, $slug);

            return $this->successResponse(
                ProductListResource::collection($data)
            );
        } catch (PDOException $e) {
            return $this->errorResponse(
                ErrorMessages::CAN_NOT_GET_RESOURCE_MSG,
                ErrorMessages::CAN_NOT_GET_RESOURCE,
                $e->getMessage()
            );
        }
    }
}
