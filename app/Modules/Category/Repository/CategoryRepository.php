<?php

namespace App\Modules\Category\Repository;

use App\Modules\Category\Contracts\Repository\ICategoryRepository;
use App\Modules\Category\Models\Category;
use App\Repository\BaseRepository;
use Illuminate\Support\Collection;

class CategoryRepository extends BaseRepository implements ICategoryRepository
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function getSubTree(string $shopName): Collection
    {
        return $this->model
            ->active()
            ->shop($shopName)
            ->orderBy('lft')
            ->get();
    }
}
