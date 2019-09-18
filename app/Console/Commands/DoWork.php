<?php

namespace App\Console\Commands;

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

    public function create_trip(){

//        GET LAST TRIP TIME
        $last_trip_time = Trip::max('created_at');
//        SELECT (FIRST POSITION - 1) AFTER TIME WHERE SPEED IS > 0;
//      $start_position = Position
    }

}
