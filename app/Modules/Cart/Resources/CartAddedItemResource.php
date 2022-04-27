<?php

namespace App\Modules\Cart\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartAddedItemResource extends JsonResource
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
            'id' => $this->id
        ];
    }
}
