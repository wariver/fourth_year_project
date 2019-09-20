@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item"><a href="{{route('home')}}">Home</a></li>
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ $last_position }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('header')
{{--    {!! $map['js'] !!}--}}
@endsection
