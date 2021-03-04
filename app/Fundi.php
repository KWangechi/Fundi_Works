<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fundi extends Model
{
    protected $table = 'fundis';
    public $timestamps = false;
    protected $guarded = []; 
}
