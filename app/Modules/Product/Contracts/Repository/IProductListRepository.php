<?php

namespace App\Modules\Product\Contracts\Repository;

use Illuminate\Support\Collection;

interface IProductListRepository
{
    public function getLimitedProducts(string $shopName, int $limit): Collection;

    public function getRecommendedProducts(string $shopName, int $limit): Collection;

    public function getByCategory(string $shopName, int $categoryId, int $limit): Collection;
}
