<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarGalleryImage extends Model
{
    //
    protected $table = "car_gallery_images";
    protected $fillable = ["car_id","url"];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}