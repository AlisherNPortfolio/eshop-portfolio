<?php

namespace App\Modules\Order\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderAddedResource extends JsonResource
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
