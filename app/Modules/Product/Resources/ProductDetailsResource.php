<?php

namespace App\Modules\Product\Resources;

use App\Modules\Product\DbViews\ProductList;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductDetailsResource extends JsonResource
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
            'brand' => $this->brand,
            'brand_logo' => $this->brand_logo,
            'shop_name' => $this->shop_name,
            'category' => $this->category,
            'name' => $this->name,
            'slug' => $this->unique_name,
            'description' => $this->description,
            'sku' => $this->sku,
            'rating' => $this->rating,
            'price' => $this->price,
            'qty' => $this->quantity,
            'has_attribute' => $this->has_attribute,
            'stock_status' => $this->stock_status,
            'product_status' => $this->product_status,
            'product_status_name' => $statuses[$this->product_status],
            'main_image' => $this->image,
            'images' => ProductImageResource::collection($this->images)
        ];
    }
}
