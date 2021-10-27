<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $casts = [
        'items' =>'array'
    ];

    protected $dates = [
        'date'
    ];
}
