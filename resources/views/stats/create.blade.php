@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card border-primary mb-3">
                    <div class="card-header">Create Point</div>
                    <div class="card-body">
                        <form method="post" action="{{ url('maps') }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Marker Title</label>
                                <input id="title" name="title" placeholder="Marker name" type="text" required="required"
                                       class="form-control here">
                            </div>
                            <div class="form-group">
                                <label for="device">Device</label>
                                <select class="form-control" id="select" name="device" placeholder="Options"
                                        required="required">
                                    <option value="" selected disabled>Please select</option>
                                    @foreach($device as $dev)
                                        <option value="{{$dev->id}}">{{$dev->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description"
                                          placeholder="Description" rows="3" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="location">Address</label>
                                <input id="location" name="location" placeholder="Address of marker" type="text"
                                       required="required" class="form-control here">
                            </div>
                            <div class="form-group">
                                <label for="radius">Radius</label>
                                <input id="radius" name="radius" placeholder="radius of the marker" type="number"
                                       min="0" max="30" required="required" class="form-control here">
                            </div>
                            <div class="form-group">
                                <label for="lat">Latitude</label>
                                <input id="lat" name="lat" placeholder="latitude of marker" type="text"
                                       required="required" class="form-control here">
                            </div>
                            <div class="form-group">
                                <label for="long">Longitude</label>
                                <input id="long" name="long" placeholder="longitude of marker" type="text"
                                       required="required" class="form-control here">
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="card border-primary mb-3">
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('header')
    <script type="text/javascript" src='https://maps.googleapis.com/maps/api/js?&libraries=places'></script>

    <script type="text/javascript" src="{{asset('js/locationpicker.jquery.js')}}"></script>
@endsection

@section('footer')
    <script>
        $('#map').locationpicker({
            location: {
                latitude: -1.3787037,
                longitude: 36.6894232
            },
            radius: 30,
            inputBinding: {
                latitudeInput: $('#lat'),
                longitudeInput: $('#long'),
                radiusInput: $('#radius'),
                locationNameInput: $('#location')
            },
            // Para cargar vista satelital
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            enableAutocomplete: true,
            onchanged: function (currentLocation, radius, isMarkerDropped) {
                // Uncomment line below to show alert on each Location Changed event
                //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
            }
        });
    </script>
@endsection
