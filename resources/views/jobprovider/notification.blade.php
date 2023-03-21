@extends('layouts.jobprovider.app')
@section('content')
<style>
    body {
        text-decoration: none;
        
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:active {
        background: none;
        color: black !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {

        background-color: #208CD1 !important;

        border: none !important;
        border-radius: 35px !important;

    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {

        background-color: #7ECD7C !important;
        border: none !important;
        border-radius: 35px !important;

    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        color: none !important;
    }

    .table {
        background-color: #CDE5FF;
        opacity: 0.8;
    }

    tr {
        height: 82px !important;
    }
    ul{
        text-decoration:none !important;
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
    <h2 class=" heading  my-5" style="">Notification</h2>
    <div class="card  " style="border-radius:15px;margin-top:72px">
        <div class="card-body ">
            <div class="mx-5 ">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#home" data-toggle="tab">
                            <h3>Today</h3>
                        </a></li>
                    <li><a href="#profile" data-toggle="tab">
                            <h3>Previous</h3>
                        </a></li>
                    <!--<a class="pull-right" style="margin-left:319px;" href="" data-toggle="tab">
                        <h4><i class="fa-solid fa-check-double"></i>Mark all as Read</h4>
                    </a>

                    <a class="pull-right" style="margin-left:12px;" href="#profile" data-toggle="tab">
                        <h4 style="color:red;">Clear All</h4>
                    </a>-->
                </ul>
                <div class="tab-content my-tab">
                    <div class="tab-pane active" id="home">
                        @foreach ($notification as $noti)
                        @php
                        $dt = new DateTime();
                        @endphp
                        @if($noti->created_at->format('d-m-Y') == $dt->format('d-m-Y'))
                        <div class=" row col-md-12 my-5">
                            <div class="col-lg-1">
                                <img class="user-avatar rounded-circle" style=""
                                    src="{{ asset('Assets') }}/jobprovider/3.jpeg">
                            </div>
                            <div class="col-lg-11">
                            {{$noti->description}}
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @if($noti->created_at->format('d-m-Y') != $dt->format('d-m-Y'))
                        <div class=" row col-md-12 my-12">
                            <label style="margin: 85px;font-size: 19px;color: #6868bd;">No New Notifications</label>
                        </div>
                        @endif
                    </div>
                    <div class="tab-pane" id="profile">
                    @foreach ($notification as $noti)
                        @php
                        $dt = new DateTime();
                        @endphp
                        @if($noti->created_at->format('d-m-Y') != $dt->format('d-m-Y'))
                        <div class=" row col-md-12 my-5">
                            <div class="col-lg-1">
                                <img class="user-avatar rounded-circle" style=""
                                    src="{{ asset('Assets') }}/jobprovider/3.jpeg">
                            </div>
                            <div class="col-lg-11">
                            {{$noti->description}}
                            </div>
                        </div>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
</body>
@endsection
