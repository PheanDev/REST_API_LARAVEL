<?php

namespace App\Http\Resources\Student;

use Illuminate\Http\Resources\Json\JsonResource;

class ScoreResource extends JsonResource
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
             'math'=>$this->math,
             'khmer'=>$this->khmer,
             'physic'=>$this->physic,
             'chemisty'=>$this->chemistry,
             'biology'=>$this->biology,
        ];
    }
}
