<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MainCategoryResource extends JsonResource
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
            'name_en'=> $this->name_en,
            'name_ar'=> $this->name_ar,
            'status'=> $this->status,
            'is_parent'=> $this->is_parent,
            'image'=> $this->image,
            'slug'=> $this->slug,
        ];
    }
}
