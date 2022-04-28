<?php

namespace App\Modules\Cart\Repository;

use App\Modules\Cart\Contracts\Repository\ICartViewRepository;
use App\Modules\Cart\DbViews\CartView;
use App\Repository\ReadableRepository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class CartViewRepository extends ReadableRepository implements ICartViewRepository
{
    public function __construct(CartView $model)
    {
        parent::__construct($model);
    }

    public function getItems($user_id): Collection
    {
        return $this->model
            ->where('user_id', '=', $user_id)
            ->get();
    }

    public function getDetails(): Collection
    {
        $userId = Auth::user()->id;

        $cartQuery = $this->model
            ->byUserId($userId);

        $result = [
            'total_sum' => $cartQuery->sum('total_sum'),
            'product_count' => $cartQuery->count()
        ];

        return collect($result);
    }
}
