<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $guarded;

    public function Properties(){
        return $this->hasMany(Properties::class);
    }
    public function getPropertiesCountAttribute(){
        return $this->Properties()->count();
    }
}
