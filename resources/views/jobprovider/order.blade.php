@extends('layouts.jobprovider.app')
@section('content')
<style>
    body {
        text-decoration: none;
    }

</style>
{{-- Message --}}
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
        <i class="fa fa-times"></i>
    </button>
    <strong>Success !</strong> {{ session('success') }}
</div>
@endif
@if (Session::has('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
        <i class="fa fa-times"></i>
    </button>
    <strong>Error !</strong> {{ session('error') }}
</div>
@endif

<body>
<h3 class="  heading" style="">My Order </h3>
    <div class="card  " style="border-radius:15px;margin-top:72px">
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-resp-noscroll" id="dt-vertical-scroll">
                    <thead>
                        <tr>
                            <th>Order No</th>
                            <th>Date</th>
                            <th>Plane</th>
                            <th>Expiry Date</th>
                            <th>Payment Status</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>#{{ $order->order_id}}</td>
                            <td>{{ $order->created_at->format('d-m-Y')}}</td>
                            <td>{{ $order->subscription->name}}</td>
                            <td>{{ $order->planexpiry_date->format('d-m-Y')}}</td>
                            <td>{{ $order->payment_status}}</td>
                            <td><a href=""  style="color: black;"><i class="fa fa-download" aria-hidden="true"></i>Dowload</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@endsection
