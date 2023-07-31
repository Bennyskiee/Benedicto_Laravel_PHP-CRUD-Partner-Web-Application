@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="section"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">EDIT/ADD REQUIREMENTS</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('requirements.update', $requirements->requirements_id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Customer ID</label>
                                        <input type="text" class="form-control" name="customer_id" value="{{ $requirements->customer_id }}">
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>No. of Passed Requirements</label>
                                        <input type="text" class="form-control" name="requirement" value="{{ $requirements->requirement }}">
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