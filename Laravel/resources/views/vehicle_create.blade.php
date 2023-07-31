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
                        <h4 class="card-title">ADD VEHICLE</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vehicles.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>CAR MODEL</label>
                                        <input type="text" class="form-control" name="vehicle_model" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>TYPE</label>
                                        <input type="text" class="form-control" name="vehicle_type" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>COLOR</label>
                                        <input type="text" class="form-control" name="color" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>PLATE</label>
                                        <input type="text" class="form-control" name="plate" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>VEHICLE STATUS</label>
                                        <input type="text" class="form-control" name="vehicle_status" required>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-fill pull-right">Save</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection