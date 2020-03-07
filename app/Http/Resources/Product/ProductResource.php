<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
           'name'=>$this->name,
           'description'=>$this->detail,
           'price'=>$this->price,
           'stock'=>$this->stock,
           'discount'=>$this->discount,
           'rate'=>$this->Review->count()>0?round($this->Review->sum('star')/$this->Review->count(),2):'Not rating yet '

        ];
    }
}
