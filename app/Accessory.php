<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    //
    protected $table="accessories";
    protected $fillable = ["car_id","accessory_name"];

    public function car()
    {
        return $this->belongsToMany(Car::class);
    }
    public function accessorycar()
    {
        return $this->belongsTo(Accessory::class);
    }
}