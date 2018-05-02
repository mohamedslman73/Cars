<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $table = 'cars';
    protected $fillable = ["name","price","description","model","body_type","construction_year","colour",
        "mileage","transmission","fuel","weight","decoration","cylinder_capacity","c02_emission","consumption_of",
        "consumption_city","consumption_highway","energy_label","vat_margin","new_price","minimum_driver_age","show","sold","rent"];

    public function accessories()
    {
        return $this->belongsToMany(Accessory::class);
    }
    public function cargallery()
    {
        return $this->hasMany(CarGalleryImage::class);
    }
    public function accessorycar()
    {
        return $this->belongsTo(Car::class);
    }
}