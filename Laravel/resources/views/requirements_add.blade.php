@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="section"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ADD CLIENTS/REQUIREMENTS</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('requirements.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>CUSTOMER ID</label>
                                        <input type="number" class="form-control" name="customer_id">
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>No. of Requirements Passed</label>
                                        <input type="number" class="form-control" name="requirement">
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