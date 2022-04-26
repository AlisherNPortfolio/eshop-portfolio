<?php

namespace App\Modules\Category\Contracts\Repository;

use Illuminate\Support\Collection;

interface ICategoryRepository
{
    public function getSubTree(string $shopName): Collection;
}
