<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student_Score extends Model
{
    public function Student()
    {
        return $this->belongTo(Student::class);
    }
}
