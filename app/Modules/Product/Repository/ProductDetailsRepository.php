<?php

namespace App\Modules\Product\Repository;

use App\Modules\Product\Contracts\Repository\IProductDetailsRepository;
use App\Modules\Product\DbViews\ProductDetails;
use App\Repositories\Base\ReadableRepository;
use Illuminate\Database\Eloquent\Model;

class ProductDetailsRepository extends ReadableRepository implements IProductDetailsRepository
{
    public function __construct(ProductDetails $model)
    {
        parent::__construct($model);
    }

    public function getProduct(string $shopName, string $slug): Model
    {
        return $this->model
            ->with(['images'])
            ->shop($shopName)
            ->product($slug)
            ->firstOrFail();
    }
}
