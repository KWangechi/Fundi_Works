<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    //Fillable example

protected $fillable = ['name','address','fundi', 'description', 'phone' , 'date', 'time'];

//Guarded example


protected $guarded = [];

public function scopePlumbing($query){

return $query->where('occupation', 'plumber');

}

public function scopeElectricity($query){

    return $query->where('occupation', 'electrician');
}

public function scopeWeld($query){

    return $query->where('occupation', 'welder');
}

public function scopePaint($query){

    return $query->where('occupation', 'painter');
}

public function scopeSewage($query){

    return $query->where('occupation', 'sewage');
}

public function scopeRoof($query){

    return $query->where('occupation', 'roofing');
}

public function scopeGrilling($query){

    return $query->where('occupation', 'grill');
}


}
