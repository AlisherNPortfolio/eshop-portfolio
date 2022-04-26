<?php

namespace App\Modules\Brand\Repository;

use App\Modules\Brand\Contracts\Repository\IBrandRepository;
use App\Modules\Brand\Models\Brand;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class BrandRepository extends BaseRepository implements IBrandRepository
{
    public function __construct(Brand $model)
    {
        parent::__construct($model);
    }
    public function getItems(string $shopName): Collection
    {
        return DB::table('brands')
            ->leftJoin('products', 'brands.id', '=', 'products.brand_id')
            ->select('brands.id', 'brands.name', 'brands.unique_name', 'brands.logo', DB::raw('COUNT(products.id)'))
            ->groupBy('brands.id')
            ->orderBy(DB::raw('COUNT(products.id)'), 'desc')
            ->get();
    }
}
