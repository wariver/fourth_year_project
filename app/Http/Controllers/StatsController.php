<?php

namespace App\Http\Controllers;

use App\Device;
use App\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        what are some of the stats we want to pull
//        number of trips, amount of fuel used, mileage covered, service health.
//        $maps = Map::where('user_id', Auth::user()->id)->get();
        return view('stats.index');
//        return view('map.outlier');
    }

    public function load_credit(){

    }
}
