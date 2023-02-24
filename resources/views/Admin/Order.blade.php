@extends('layouts.Dashboard')
@section('content')
<div class="col-lg-10  col-md-12" id="main">

<nav class="navbar navbar-light col-md-12 ">

    <h3 class=" mt-3  heading" style=""> Order Management</h3>


    <div class=" mt-12 pull-right">

        <div class="w-100">
        <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px;  padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:26px;    border-radius: 28%;"
                        src="{{Auth::user()->image}} ">
                    <h6 class="profile">{{Auth::user()->name}}</h6><span
                        style="font-size: 12px;font-weight:200px; padding-left:56px;!important;    font-weight: 200!important; ">{{Auth::user()->role}}</span>
                </button>

            <button class="btn noti " type="button"> <span class="icons1"><i
                        class="fa fa-bell"></i><span></button>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>



    </div>


</nav>


<nav class="navbar navbar-light ">
</nav>
<!--Table-->
<div class=" col-md-12 ">
                <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-resp-noscroll">
                                <thead>
                                    <tr>
                                        <th style="width:11%">Order ID</th>
                                        <th style="width:14%">Order Date</th>
                                        <th style="width:18%">Job Provider ID</th>
                                        <th style="width:17%">Mobile Number</th>
                                        <th style="width:14%">Plan Type</th>
                                        <th style="width:14%">Expiry Date</th>
                                        <th style="width:15%">Transaction ID</th>
                                        <th style="width:18%">Payment Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $order)
                                    <tr>
                                        <td>#{{ $order->order_id}}</td>
                                        <td>{{ $order->created_at->format('d/m/Y')}} {{ $order->created_at->format('H:i a')}}</td>
                                        <td>#{{ $order->jobprovider->jobprovider_id}}</td>
                                        <td>{{ $order->jobprovider->mobile}}</td>
                                        <td>{{ $order->subscription->name}}</td>
                                        <td>{{ $order->planexpiry_date}}</td>
                                        <td>{{ $order->transaction_id}}</td>
                                        @if($order->payment_status == "paid")
                                        <td style="color: #2ead2e;">Paid</td>
                                        @endif
                                        @if($order->payment_status == "pending")
                                        <td style="color: #c38b25;">Pending</td>
                                        @endif
                                        @if($order->payment_status == "cancelled")
                                        <td style="color: #e62b14;">Cancelled</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('show.order',$order->id) }}" data-popup="tooltip" title="View Order" style="margin-right:5px;"
                                            class="mt-2"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('edit.order',$order->id) }}" data-popup="tooltip" title="Edit Order" data-placement="bottom"
                                            class="mt-2" style="margin-right:5px;"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection
        


    




