@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-info bg-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Photos</div>
                                <div class="h4 mb-0 font-weight-light text-light">13 of 45</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-images fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Quick Actions</div>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    <button class="btn btn-sm btn-outline-success">Request for a Shoot</button>
                                </div>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    <button class="btn btn-sm btn-outline-success">Request for a Printing</button>
                                </div>

                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Personal Rating</div>

                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">70%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Eligible for free shoot</div>

                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                            </div>
                            <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-6 mb-4">
                <div class="card border-info bg-dark shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Shoots</div>
                                <div class="h4 mb-0 font-weight-light text-light">3 of 3</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-camera-retro fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
