<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PositionsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index(Request $request)
    {
        $record = $request->all();
        return DB::table('tx_record')->insert(['contents' => $record]);
    }

    public function last_twenty()
    {
        return DB::table('tx_record')->limit(20)->get();
    }
}
