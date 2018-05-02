<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessoryCar extends Model
{
    //
    protected $table = 'accessory_car';
    protected $fillable = ['car_id','accessory_id'];

}
