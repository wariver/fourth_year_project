@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card border-primary mb-3">
                <div class="card-header">New Motorcycle</div>
                <div class="card-body">
                    <form method="post" action="{{ url('device') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Motorcycle Label</label>
                            <input id="name" name="name" placeholder="rider_first" type="text" required="required" class="form-control here">
                        </div>
                        <div class="form-group">
                            <label for="name">Plate</label>
                            <input id="plate" name="unique_id" placeholder="KMTC 234F" type="text" required="required" class="form-control here">
                        </div>
                        <div class="form-group">
                            <label for="name">Tracker Phone</label>
                            <input id="plate" name="sim_in_tracker" placeholder="254706129749" type="text" required="required" class="form-control here">
                        </div>
                        <div class="form-group">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('header')

@endsection

@section('footer')

@endsection
