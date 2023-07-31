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
                        <h4 class="card-title">EDIT PAYMENT</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('payments.update', $payment->payment_id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>RENT ID</label>
                                        <input type="text" class="form-control" name="rent_id" value="{{ $payment->rent_id }}">
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>PAYMENT</label>
                                        <input type="text" class="form-control" name="mode_payment" value="{{ $payment->mode_payment }}">
                                    </div>
                                </div>
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>BALANCE</label>
                                        <input type="text" class="form-control" name="balance" value="{{ $payment->balance }}">
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