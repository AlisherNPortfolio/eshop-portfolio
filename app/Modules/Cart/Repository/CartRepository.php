<?php

namespace App\Modules\Cart\Repository;

use App\Modules\Cart\Contracts\Repository\ICartRepository;
use App\Modules\Cart\Models\Cart;
use App\Modules\Product\Models\ProductOptionItem;
use App\Repository\BaseRepository;
use App\Utils\ErrorMessages;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CartRepository extends BaseRepository implements ICartRepository
{
    public function __construct(Cart $model)
    {
        parent::__construct($model);
    }

    public function add(array $data): Cart
    {
        $demandedProduct = $this->getProductOption($data['product_id']);

        $params = [
            'product_option_item_id' => $data['product_id'],
            'qty' => $data['quantity'],
            'total_sum' => $demandedProduct->price * $data['quantity'],
            'user_id' => Auth::user()->id
        ];

        return $this->model->create($params);
    }

    public function checkHasProduct(int $product_id): Cart
    {
        return $this->model
        ->where('product_option_item_id', '=', $product_id)
        ->where('user_id', '=', Auth::user()->id)
        ->first();
    }

    private function getProductOption($optionId)
    {
        $product = ProductOptionItem::find($optionId);

        if (! $product) {
            abort(ErrorMessages::NOT_FOUND, ErrorMessages::NOT_FOUND_MSG);
        }

        return $product;
    }
}
