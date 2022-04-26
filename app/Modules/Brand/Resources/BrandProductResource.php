<?php

namespace App\Modules\Brand\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandProductResource extends JsonResource
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
            'name' => $this->name,
            'logo' => $this->logo,
            'count' => $this->count,
            'unique_name' => $this->unique_name
        ];
    }
}
