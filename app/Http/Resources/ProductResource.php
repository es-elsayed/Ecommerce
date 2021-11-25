<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'name'=> $this->name_en ,
            // 'name_ar'=>$this->name_ar,
            'details_en'=>$this->details_en,
            'details_ar'=>$this->details_ar,
            'description_en'=>$this->description_en,
            'description_ar'=>$this->description_ar,
            'price'=>$this->price,
            'sale_price'=>$this->sale ? $this->sale_price : null,
            'status'=>$this->status,
            'image'=>$this->main_image,
            'categories'=>$this->categories
        ];
    }
}
