<?php

namespace App\Modules\Cart\Contracts\Repository;

use Illuminate\Support\Collection;

interface ICartViewRepository
{
    public function getItems($user_id): Collection;

    public function getDetails(): Collection;
}
