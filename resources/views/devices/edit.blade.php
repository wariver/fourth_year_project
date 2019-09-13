@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card border-primary mb-3">
                    <div class="card-header">New Motorcycle</div>
                    <div class="card-body">
                        <form method="post" action="{{ url('device/'.$device->id) }}">
                            @csrf {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="name">Motorcycle Label</label>
                                <input id="name" name="name" value="{{$device->name}}" type="text" required="required"
                                       class="form-control here">
                            </div>
                            <div class="form-group">
                                <label for="name">Plate</label>
                                <input id="plate" name="unique_id" value="{{$device->unique_id}}" type="text"
                                       required="required" class="form-control here">
                            </div>
                            <div class="form-group">
                                <label for="name">Tracker Phone</label>
                                <input id="plate" name="sim_in_tracker" value="{{$device->sim_in_tracker}}" type="text"
                                       required="required" class="form-control here">
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>


@endsection

@section('header')

@endsection

@section('footer')

@endsection
