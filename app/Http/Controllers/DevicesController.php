<?php

namespace App\Http\Controllers;

use App\Device;
use App\Position;
use Illuminate\Http\Request;

class DevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $device = Device::all();
        return view('devices.index', compact('device'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('devices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $device = new Device();
        $device->name = $request->name;
        $device->unique_id = $request->unique_id;
        $device->sim_in_tracker = $request->sim_in_tracker;
        $device->save();
        return redirect()->action('DevicesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        //
        $device_data = array();
        $device_data['last_position'] = Position::where('device_id', $device)->max('id');
        return view('devices.show')->with($device_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        return view('devices.edit', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request

     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $device->name = $request->name;
        $device->unique_id = $request->unique_id;
        $device->sim_in_tracker = $request->sim_in_tracker;
        $device->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *

     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();
        return redirect()->back();
    }
}
