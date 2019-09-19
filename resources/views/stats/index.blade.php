@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">Fuel Consumption</div>
                                <div class="h4 mb-0 font-weight-light">Averaging</div>
                                <div class="h4 mb-0 font-weight-light">35 KM / Litre of petrol</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-motorcycle text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-dark shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Quick Actions</div>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    <button class="btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#add_fuel">&nbsp;&nbsp;&nbsp;&nbsp;Record Fuel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                </div>
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    <button class="btn btn-sm btn-outline-dark" data-toggle="modal" data-target="#bike_service">Went for Service?</button>
                                </div>

                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="add_fuel" tabindex="-1" role="dialog" aria-labelledby="add_fuel_modal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="add_fuel_modal">Add Fuel</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="amount_spent">Amount Spent</label>
                                            <input type="number" class="form-control" id="amount_spent" placeholder="200">
                                        </div>
                                        <div class="form-group">
                                            <label for="cpl">Cost per Litre</label>
                                            <input type="text" class="form-control" id="cpl" value="KES. 112.45">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="bike_service" tabindex="-1" role="dialog" aria-labelledby="bike_service_modal" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="bike_service_modal">Add Service on Motorcycle</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="amount_spent">Amount Spent</label>
                                            <input type="number" class="form-control" id="amount_spent" placeholder="500">
                                        </div>
                                        <div class="form-group">
                                            <label for="cpl">Cost per Session</label>
                                            <input type="text" class="form-control" id="cpl" value="KES. 500">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-info bg-dark shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-light text-uppercase mb-1">Total Mileage</div>
                                <div class="h4 mb-0 font-weight-light text-light">44Km in 4 days</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-camera-retro fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-5 col-md-6 mb-4">
                <div class="card border-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">| breakdown | <small>(consumption)</small></div>
                                <div class="h4 mb-0 font-weight-light">You are spending <b>KES. 500</b> on petrol per week.</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-motorcycle text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="text-xs font-weight-normal text-primary text-uppercase mb-1">Due for Service</div>

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
                        <div class="text-xs font-weight-normal text-primary text-uppercase mb-1">Consumption Health</div>

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

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-info bg-dark shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-1">
                                <div class="text-xs font-weight-bold text-light text-uppercase mb-1">| breakdown | <small>(mileage)</small></div>
                                <div class="h4 mb-0 font-weight-light text-light">Dennis has covered <b>400 Km</b> in the past week.</div>
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
