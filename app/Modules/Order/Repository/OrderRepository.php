<?php

namespace App\Modules\Order\Repository;

use App\Modules\Order\Contracts\Repository\IOrderRepository;
use App\Modules\Order\Models\Order;
use App\Modules\Product\Models\ProductOptionItem;
use App\Repository\BaseRepository;
use App\Utils\ErrorMessages;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderRepository extends BaseRepository implements IOrderRepository
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

    public function addItem(array $params): Order|bool
    {
        /** 1. Order create
         *  2. OrderItem create
         *  3. OrderPayment (agar bo'lsa)
         */

        DB::beginTransaction();
        try {
            $customerProducts = $this->getCustromerProducts($params['products']);
            $order = $this->createOrder($params, $customerProducts);
            $order->createItem($params['products'], $customerProducts); //dd($params);

            if ($params['has_installment']) {
                $order->createPayments();
            }

            DB::commit();
            return $order;
        } catch (Exception $e) {
            DB::rollBack();
            abort(400, $e->getMessage());
        }
    }

    private function createOrder(array $inputData, Collection $customerProducts): Order
    {
        $userId = Auth::user()->id;

        return $this->model->create([
            'user_id' => $userId,
            'delivery_region_id' => $inputData['delivery_region_id'],
            'delivery_district_id' => $inputData['delivery_district_id'],
            'delivery_address' => $inputData['delivery_address'],
            'customer_comment' => $inputData['customer_comment'],
            'total_price' => $customerProducts->sum(),
            'has_installment' => $inputData['has_installment']
        ]);
    }

    private function getCustromerProducts(array $productParams): Collection
    {
        $products = [];

        foreach ($productParams as $product) {
            $productItem = ProductOptionItem::find($product['product_id']);
            $products[$product['product_id']] = $productItem->price * $product['quantity'];
        }

        return collect($products);
    }
}
