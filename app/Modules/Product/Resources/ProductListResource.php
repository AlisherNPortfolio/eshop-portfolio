<?php

namespace App\Modules\Product\Resources;

use App\Modules\Product\DbViews\ProductList;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $statuses = [
            ProductList::STATUS_NEW => 'New',
            ProductList::STATUS_SALE => 'Sale',
            ProductList::STATUS_STANDARD => 'Standard'
        ];

        return [
            'name' => $this->name,
            'image' => $this->image,
            'shop_name' => $this->shop_name,
            'in_stock' => $this->stock_status,
            'slug' => $this->unique_name,
            'price' => $this->price,
            'qty' => $this->qty,
            'status' => $statuses[$this->product_status]
        ];
    }
}
