<?php

namespace App\Modules\Product\Repository;

use App\Modules\Product\Contracts\Repository\IProductListRepository;
use App\Modules\Product\DbViews\ProductList;
use App\Repositories\Base\ReadableRepository;
use Illuminate\Support\Collection;

class ProductListRepository extends ReadableRepository implements IProductListRepository
{
    public function __construct(ProductList $model)
    {
        parent::__construct($model);
    }

    public function getLimitedProducts(string $shopName, int $limit): Collection
    {
        $model = $this->model;

        return $model
            ->shop($shopName)
            ->active()
            ->limit($limit)
            ->get()
            ->map(function ($item, $key) use ($model) {
                match ($item->product_status) {
                    $model::STATUS_NEW => $item['status'] = 'New',
                    $model::STATUS_SALE => $item['status'] = 'Sale',
                    $model::STATUS_STANDARD => $item['status'] = 'Standard',
                };

                return $item;
            });
    }

    public function getRecommendedProducts(string $shopName, int $limit): Collection
    {
        return $this->model
            ->shop($shopName)
            ->recommended()
            ->active()
            ->limit($limit)
            ->get();
    }

    public function getByCategory(string $shopName, int $categoryId, int $limit): Collection
    {
        return $this->model
            ->shop($shopName)
            ->byCategory($categoryId)
            ->active()
            ->limit($limit)
            ->get();
    }
}
