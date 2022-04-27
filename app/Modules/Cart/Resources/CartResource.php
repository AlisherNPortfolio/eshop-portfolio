<?php

namespace App\Modules\Cart\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'total_sum' => $this->total_sum,
            'quantity' => $this->qty,
            'product_id' => $this->product_id,
            'price' => $this->price,
            'quantity_in_stock' => $this->stock_qty,
            'product_name' => $this->product_name,
            'sku' => $this->sku,
            'image' => $this->image,
            'slug' => $this->product_slug,
            'total_price' => $this->total_price
        ];
    }
}
