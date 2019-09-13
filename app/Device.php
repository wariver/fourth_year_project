<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function maps()
    {
        return $this->hasMany('App\Map');
    }
}
