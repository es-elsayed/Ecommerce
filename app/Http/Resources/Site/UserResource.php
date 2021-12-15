<?php

namespace App\Http\Resources\Site;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'first_name' => $this->f_name,
            'last_name' => $this->l_name,
            'full_name' => $this->f_name." ".$this->l_name,
            'email' => $this->email,
            'image' => $this->image,
            'phone' => $this->phone,
        ];
    }
}
