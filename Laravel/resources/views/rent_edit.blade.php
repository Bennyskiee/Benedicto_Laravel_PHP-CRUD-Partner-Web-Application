@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="section"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">EDIT RENTED VEHICLE</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('rents.update',  $rent->rent_id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>VEHICLE ID</label>
                                        <input type="text" class="form-control" name="vehicle_id" value="{{ $rent->vehicle_id }}" >
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>CUSTOMER ID</label>
                                        <input type="text" class="form-control" name="customer_id" value="{{ $rent->customer_id }}" >
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>RENT START</label>
                                        <input type="datetime" class="form-control" name="rent_start" value="{{ $rent->rent_start }}" >
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>RENT END</label>
                                        <input type="datetime" class="form-control" name="rent_end" value="{{ $rent->rent_end }}" >
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