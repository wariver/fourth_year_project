<?php

use App\Events\SendLocation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('cat/{id}', 'HomeController@cat');
Route::resource('maps', 'MapController')->middleware('auth');
Route::resource('category', 'CategoryController')->middleware('auth');
Route::resource('device', 'DevicesController')->middleware('auth');
Route::resource('canvas', 'CategoryController')->middleware('auth');
Route::get('/trip', 'HomeController@trip')->name('trip');


Route::get('category/media/{icon}', function ($icon) {
    return Image::make(storage_path().'/app/uploads/category/'.$icon)->response();
});

Route::post('/map', function (Request $request) {
    $lat = $request->input('lat');
    $long = $request->input('long');
    $location = ["lat"=>$lat, "long"=>$long];
    event(new SendLocation($location));
    return response()->json(['status'=>'success', 'data'=>$location]);
});
