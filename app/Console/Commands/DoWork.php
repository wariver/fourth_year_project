<?php

namespace App\Console\Commands;

use App\Position;
use App\Trip;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DoWork extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DoWork:year_work';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->create_trip();
        return null;
    }

    public function create_trip()
    {

//        GET LAST TRIP TIME
        $last_trip_time = Trip::max('created_at');
//        SELECT (FIRST POSITION - 1) AFTER TIME WHERE SPEED IS > 0;
        if ($last_trip_time) {
            $start_position = Position::where('speed', '>', 0)->where('created_at', '>', $last_trip_time)->firstorFail();
            $end_position = Position::where('id', '>', $start_position->id)->where('speed', 0)->where('created_at', '>', $last_trip_time)->firstorFail();
        } else {
            $start_position = Position::where('speed', '>', 0)->firstorFail();
            $end_position = Position::where('id', '>', $start_position->id)->where('speed', 0)->firstorFail();
        }
        $attribute_first = json_decode($start_position->attributes, true);
        $attribute_end = json_decode($end_position->attributes, true);
//        dd($attribute_first, $attribute_end);
        dd($attribute_first['distance'] - $attribute_end['distance']);
//        insert trip
        $trip = new Trip();
        $trip->driver_id = 1;
        $trip->distance = $attribute_first['distance'] - $attribute_end['distance'];
        $trip->time_taken = 0;
        $trip->average_speed = 0;
        $trip->save();

    }

}
