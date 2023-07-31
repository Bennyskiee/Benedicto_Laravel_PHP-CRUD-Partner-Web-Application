@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="section">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Vehicle</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vehicles.update', $vehicle->vehicle_id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>VEHICLE ID</label>
                                        <input type="text" class="form-control" name="vehicle_id" value="{{ $vehicle->vehicle_id }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>VEHICLE MODEL</label>
                                        <input type="text" class="form-control" name="vehicle_model" value="{{ $vehicle->vehicle_model }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>VEHICLE TYPE</label>
                                        <input type="text" class="form-control" name="vehicle_type" value="{{ $vehicle->vehicle_type }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>VEHICLE COLOR</label>
                                        <input type="text" class="form-control" name="color" value="{{ $vehicle->color }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>VEHICLE PLATE</label>
                                        <input type="text" class="form-control" name="plate" value="{{ $vehicle->plate }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>VEHICLE RENT STATUS</label>
                                        <input type="text" class="form-control" name="vehicle_status" value="{{ $vehicle->vehicle_status }}" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success btn-fill pull-right">Save</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
