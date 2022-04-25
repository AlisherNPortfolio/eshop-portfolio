<?php

namespace App\Modules\Product\Contracts\Repository;

use Illuminate\Database\Eloquent\Model;

interface IProductDetailsRepository
{
    public function getProduct(string $shopName, string $slug): Model|null;
}
