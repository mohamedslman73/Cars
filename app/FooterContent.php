<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterContent extends Model
{
    //
    protected $table= "footer_contents";
    protected $fillable = ["title","address","phone","email"];
}
