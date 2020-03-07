<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_family extends Model
{
    protected $table='student_family';

    protected $fillable=
    [
        'name','relationship'
    ];
}
