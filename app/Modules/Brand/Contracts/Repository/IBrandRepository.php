<?php

namespace App\Modules\Brand\Contracts\Repository;

use Illuminate\Support\Collection;

interface IBrandRepository
{
    public function getItems(string $shopName): Collection;
}
