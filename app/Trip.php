<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [
        'driver_id', 'distance', 'time_taken', 'average_speed'
    ];
}
