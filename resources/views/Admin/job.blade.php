@extends('layouts.Dashboard')
@section('content')
<div class="col-lg-10  col-md-12" id="main">

    <nav class="navbar navbar-light col-md-12 ">

        <h3 class=" mt-3  heading" style=""> Job Management</h3>


        <div class=" mt-12 pull-right">

            <div class="w-100">
                <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px; padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:26px;    border-radius: 28%;"
                        src="{{Auth::user()->image}} ">
                    <h6 class="profile">{{Auth::user()->name}}</h6><span
                        style="font-size: 12px;font-weight:200px; padding-left:56px;!important;    font-weight: 200!important; ">{{Auth::user()->role}}</span>
                </button>

                <button class="btn noti " type="button"> <span class="icons1"><i class="fa fa-bell"></i><span></button>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>



        </div>


    </nav>


    <nav class="navbar navbar-light ">

        <a class="btn " href="{{ route('get.addjob') }}"> <span class="icons"> <i class="fa fa-plus "
                    aria-hidden="true"></i></span></a>



        <div class=" has-search col-md-3">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class=" form-control form-control-lg " placeholder="Search">
        </div>
    </nav>
    <!--Table-->
    <div class=" col-md-12 ">
        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-resp-noscroll">
                        <thead>
                            <tr>
                                <th>Job ID</th>
                                <th>Created Date</th>
                                <th>JobProvider Name</th>
                                <th>Job Name</th>
                                <th>Category</th>
                                <th>Expiry Date</th>
                                <th>Approval Status</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        @foreach ($job as $jobs)
                        <tbody>

                            <tr>
                                <td>#{{ $jobs->job_id}}</td>
                                <td>{{ $jobs->created_at->format('Y-m-d')}}</td>
                                <td></td>
                                <td>{{ $jobs->jobname}}</td>
                                <td>{{ $jobs->jobcategory}}</td>
                                <td>{{ $jobs->expirydate}}</td>

                                <td class="text-right">
                                    <div class="action-btns d-flex justify-content-end">
                                        <a href="" data-popup="tooltip" title="View Cities" style="margin-right:5px;"
                                            class="mt-2"><i class="fa-solid fa-circle-check"
                                                style="font-size:25px;color:#7ECD7C"></i></a>
                                        <a href="" data-popup="tooltip" title="Edit" data-placement="bottom"
                                            class="mt-2" style="margin-right:5px;"><i class="fa fa-times-circle"
                                                style="font-size:25px;color:#C15A5A"></i></a>


                                    </div>
                                </td>

                                <td class="text-right" style="width: 10%;">
                                    <div class="action-btns d-flex justify-content-end">
                                        <a href="" data-popup="tooltip" title="View Cities" style="margin-right:5px;"
                                            class="mt-2"><i class="fa fa-eye"></i></a>
                                        <a href="" data-popup="tooltip" title="Edit" data-placement="bottom"
                                            class="mt-2" style="margin-right:5px;"><i class="fa fa-edit"></i></a>

                                        <a href="" data-popup="tooltip" title="Edit" data-placement="bottom"
                                            class="mt-2" style="margin-right:5px;"><i class="fa fa-user"></i></a>
                                        <a href="" data-popup="tooltip" title="Edit" data-placement="bottom"
                                            class="mt-2"><i class="fa fa-trash"></i></a>

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </thead>

                    </table>

                </div>
            </div>
        </div>
    </div>




</div>

@endsection








<!-- <script src="https://code.jquery.com/jquery-1.9.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {


$('.navbar-toggler').click(function () {
    if ($(window).width() < 960) {
        $("#sidenav1").toggle("slide");
}
else {
    $("#sidenav1").toggle();
}
  
    
});

});
    </script> -->
