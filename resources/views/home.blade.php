@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="h4">
                    MY BIKES
                </div>
                <ul class="list-group">
                    @foreach($device as $dev)
                        <li class="list-group-item">
                            <a href="{{url('device/'.$dev->id)}}">{{$dev->name}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <iframe src="http://localhost:4200"></iframe>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('header')
    {!! $map['js'] !!}
@endsection
