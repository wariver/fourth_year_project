<?php

namespace App\Http\Controllers;

use App\Device;
use App\Map;
use App\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use tests\Mockery\Generator\ClassWithDebugInfo;

class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::where('driver_id', Auth::user()->id)->get();
        return view('trips.index', compact('trips'));
//        return view('map.outlier');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $device = Device::all();
        return view('map.create', compact('device'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $map = new Map;
        $map->user_id = Auth::user()->id;
        $map->description = $request->description;
        $map->title = $request->title;
        $map->address = $request->location;
        $map->radius = $request->radius;
        $map->latitude = $request->lat;
        $map->longitude = $request->long;
        $map->save();

        return redirect()->action('MapController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Map $map
     * @return \Illuminate\Http\Response
     */
    public function show(Map $map)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Map $map
     * @return \Illuminate\Http\Response
     */
    public function edit(Map $map)
    {
        $device = Device::all();
        return view('map.edit', compact('map', 'device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Map $map
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Map $map)
    {
        $map->user_id = Auth::user()->id;
        $map->description = $request->description;
        $map->title = $request->title;
        $map->address = $request->location;
        $map->radius = $request->radius;
        $map->latitude = $request->lat;
        $map->longitude = $request->long;
        $map->save();

        return redirect()->action('MapController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Map $map
     * @return \Illuminate\Http\Response
     */
    public function destroy(Map $map)
    {
        $map->delete();

        return redirect()->action('MapController@index');
    }

    public function transactions(Request $request)
    {
        $record = json_encode($request->all());
        return response()->json(['inserted' => DB::table('tx_record')->insert(['contents' => (string)$record])]);
    }


    public function aysup_order(Request $request)
    {
        $source_name = $request->get('source_name');
        $source = $request->get('source');
        $destination_name = $request->get('destination_name');
        $destination = $request->get('destination');
        $estimate = $request->get('estimate');
        $client_id = $request->get('client_id');
        $client_phone = $request->get('client_phone');
        $ride_status = $request->get('ride_status');
        $pick_up_contact = $request->get('pick_up_contact');
        $drop_off_contact = $request->get('drop_off_contact');

        $insert = [
            'client_id' => $client_id,
            'client_phone' => $client_phone,
            'price_estimate' => $estimate,
            'destination_name' => $destination_name,
            'destination_lat' => $destination['lat'],
            'destination_long' => $destination['lng'],
            'source_name' => $source_name,
            'source_lat' => $source['lat'],
            'source_long' => $source['lng'],
            'pick_up_contact' => $pick_up_contact,
            'drop_off_contact' => $drop_off_contact,
            'ride_status' => 0,
        ];

//        if inserted fire SMS.
        return response()->json(['received' => DB::table('tbl_orders')->insert($insert)]);
    }
}
