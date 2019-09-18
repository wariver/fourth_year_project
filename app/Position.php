<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'device_id', 'device_time', 'latitude', 'longitude', 'speed', 'attributes', 'accuracy'
    ];
}
