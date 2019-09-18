<?php

namespace App\Http\Controllers;

use App\Events\FYEvent;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return bool
     */
    public function index(Request $request)
    {
        $record = json_encode($request->all());
        return response()->json(DB::table('tx_record')->insert(['contents' => (string)$record]));
    }

    public function last_twenty()
    {
        return DB::table('tx_record')->limit(20)->get();
    }

    public function pushMessage(Request $request)
    {
        $message = $request->get('msg');
        return event(new FYEvent($message));
    }
}
