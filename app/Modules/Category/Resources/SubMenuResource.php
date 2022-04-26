<?php

namespace App\Modules\Category\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubMenuResource extends JsonResource
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
            'left' => $this->lft,
            'right' => $this->rgt,
            'level' => $this->depth,
            'parent' => $this->parent_id,
            'status' => $this->status
        ];
    }
}
