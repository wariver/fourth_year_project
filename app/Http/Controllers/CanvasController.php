<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Map;
use Illuminate\Http\Request;

class CanvasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function maps()
    {
        $maps = Map::where('user_id', Auth::user()->id)->get();
        return view('map.canvas', compact('maps'));
    }

    public function canvas()
    {
        $maps = Map::where('user_id', Auth::user()->id)->get();
        return view('map.canvas', compact('maps'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('map.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $map = new Map;
        $map->user_id = Auth::user()->id;
        $map->category_id = $request->category;
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
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function show(Map $map)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function edit(Map $map)
    {
        $category = Category::all();
        return view('map.edit', compact('map', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Map $map)
    {
        $map->user_id   = Auth::user()->id;
        $map->category_id = $request->category;
        $map->description = $request->description;
        $map->title     = $request->title;
        $map->address   = $request->location;
        $map->radius    = $request->radius;
        $map->latitude  = $request->lat;
        $map->longitude = $request->long;
        $map->save();

        return redirect()->action('MapController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Map  $map
     * @return \Illuminate\Http\Response
     */
    public function destroy(Map $map)
    {
        $map->delete();

        return redirect()->action('MapController@index');
    }
}
