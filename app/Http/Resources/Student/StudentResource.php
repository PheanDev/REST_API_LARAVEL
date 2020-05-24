<?php

namespace App\Http\Resources\Student;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
           'id'=>$this->sid,
           'name'=>$this->name,
           'gender'=>$this->gender,
           'age'=>$this->age,
           'class'=>$this->class,
           'year'=>$this->year,
        ];
    }
}
