@extends('layouts.app')
@section('header')
    <script src="{{url('/')}}/js/gmaps.min.js"></script>
    <script type="text/javascript">
        var map;
        var markers = {{json_encode($trip)}};
        console.log(markers);
        var journey = 299;
        $(document).ready(function () {
            map = new GMaps({
                div: '#map',
                lat: {{$latitude}},
                lng: {{$longitude}},
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.TERRAIN
            });
            // var iconBase = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/';
            var iconBase = 'http://maps.google.com/mapfiles/kml/shapes/';

            for (var i = 0; i < journey; i++) {
                if (markers.speed[i] > 70) {
                    map.addMarker({
                        lat: markers.lat[i],
                        lng: markers.long[i],
                        label: markers.speed[i],
                        title: '{{$formatted_address}}',
                        icon: iconBase + 'placemark_circle_highlight.png',
                        infoWindow: {
                            content: '{{$formatted_address}}' + ' Speed: ' + markers.speed[i]

                        }
                    });
                } else {
                    map.addMarker({
                        lat: markers.lat[i],
                        lng: markers.long[i],
                        label: markers.speed[i],
                        title: '{{$formatted_address}}',
                        icon: iconBase + 'placemark_circle.png',
                        infoWindow: {
                            content: '{{$formatted_address}}' + ' Speed: ' + markers.speed[i]

                        }
                    });
                }
            }
            /*map.addMarker({
                lat: <?=$latitude?>,
                lng: <?=$longitude?>,
                label: 'Keli',
                title: '<?=$formatted_address?>',
                infoWindow: {
                    content: '<?=$formatted_address?>'
                }
            });*/
        });
    </script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center;">MOTORCYCLIST TRIP</h1>
                <form class="form-inline" method="get" style="text-align: center;">
                    <div class="form-group">
                        <input class="form-control" type="text" name="find" id="find" value="<?= urldecode($find) ?>">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Find">
                </form>
                <br>
                <div style="text-align: center;">
                    <kbd><kbd>Latitude:</kbd><?= $latitude ?>, <kbd>Longitude:</kbd><?= $longitude ?></kbd>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div id="map"></div>
        </div>
    </div>
    <script src="{{url('/')}}/js/bootstrap.min.js"></script>
@endsection

@section('header')
    {!! $map['js'] !!}
@endsection
