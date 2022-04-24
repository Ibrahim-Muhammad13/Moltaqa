<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //

    protected $guarded;

    public function Properties(){
        return $this->hasMany(Properties::class);
    }
}
