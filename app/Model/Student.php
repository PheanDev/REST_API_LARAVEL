<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'name','gener','age','class','year'
    ];
    public function Score()
    {
        return $this->hasMany(Student_Score::class);
    }
    public $timestamps = false;
}
