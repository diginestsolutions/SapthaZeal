<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
      
      
       
    }

    body {
        background: #f3f5f9;
    }

    .wrapper {
        position: relative;
    }

    .sidebar {

        width: 250px;

        background: #fff;

        margin-top: 10px;
        border-radius: 15px;

        margin-bottom: 10px;


        color: #000000;

    }

    .navbar-collapse {
        position: absolute;
        z-index: 3;
        width: 250px;
        height: 100%;
        padding-left: 10px;

        background: #fff;
    }

    .navbar-collapse li :hover {
        color: #49B945 !important;
        text-decoration: none;
        border-right: 3px solid #49B945;
    }

    .navbar-collapse ul li a {
        color: #000000;
        display: block;
    }

    .navbar-collapse :hover {
        background: #daf1d9;



    }

    .card {
        padding: 20px;
        margin: 10px 0 10px;
    }

    ul {
        padding-bottom: 18px;
        font-size: 15px;

    }

    h3 {
        text-align: left;
        font-family: 'Quicksand' !important;
        font-weight: 600 !important;
        letter-spacing: 1px;
        color: #000000;
        opacity: 1;
        font-size: 32px !important;
    }



    .sidebar ul li a {
        color: #000000;
        display: block;
        padding: 16px;
    }
    

    th {
        font-family: 'Quicksand' !important;
        font-weight: 600 !important;
    }



    .img-fluid {
        margin-top: 5px;
        margin-bottom: 10px;

    }

    /* .sidebar ul li a .far {
        width: 30px;
        color: #bdb8d7 !important;
    } */



    .sidebar ul li :hover {
        color: #49B945 !important;
        text-decoration: none;
        border-right: 3px solid #49B945;
        background: #e4f5e3;


    }

    @media (min-width:992px) {
        .sidenav {
            background: #fff;
            padding: 10px 0;
            text-decoration: none;
            border-radius: 15px;
            margin: 10px 0 10px;
            margin-bottom: 10px;

            overflow: hidden;

            color: #000000;
        }

        .sidenav ul li {
            padding: 15px;
            color: #000000;
            display: block;

        }



    }



    .icons {
        padding: 10 12 10 12px;
        background: #7ECD7C;
        color: white;
        font-size: 17px;
        text-align: center;
        border-radius: 15px;
    }
    th{
        font-size: 15px;
    font-family: 'Quicksand';
    }
    td{
        font-size: 14px;
    font-family: 'Quicksand';  
    }
    .icons1 {
        padding: 10 12 10 12px;
        background: #ffff;
        color: #208CD1;
        ;
        font-size: 20px;
        text-align: center;
        margin-top: 50px;
        border-radius: 15px;
    }

    .container-fluid {
        background-image: url('../../../assets/1.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .table1 {
        border-radius: 15px;
    }

    .has-search .form-control {
        padding-left: 2.375rem;

        float: right !important;

        font-size: 13px;
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;

    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 45px;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #6a6a6a;
    }



    .user-area .user-avatar {
        float: right;
        margin-top: 4px;
        width: 32px;
    }

    .icons2 {
        height: 46px;
        width: 36px;
    }

    @media screen and (min-width: 768px) {

        .navbar-toggler {
            display: none;
        }

        .navbar-collapse {
            display: none;
        }

    }

    @media (max-width: 768px) {
        #sidenav {
            display: none;
        }
    }

    @media screen and (max-width < 500px) {

        .navbar-toggler {
            display: block;
        }

        #sidenav {
            display: none;
        }

    }
    @media only screen   
and (min-width: 1370px)  
and (max-width: 1605px)  
{ 
    ul{
    font-size:17px;
}}  

    .profile {

        display: flex;
        padding-left: 50px !important;
    }
    .sidebar a.active {
        color: #49B945 !important;
        text-decoration: none;
        border-right: 3px solid #49B945;
        background: #e4f5e3;

  
}
    

</style>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="
https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js
"></script>
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
 

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<div class="container-fluid native-scroll">
    <div class="wrapper d-flex ">

        <div class="sidebar col-lg-2  col-xl-2 col-md-3 p-0 " id="sidenav">


            <div class=" col-lg-10">
                <img src="../../../assets/logo.png" class="img-fluid " alt="Sample image">
            </div>
            <div class="justify-content-center">
                <ul>
                    <li><a  href="{{route('view.job')}}">Job Management</a></li>
                    <li><a href="{{route('view.industry')}}">Job Industry Management</a></li>
                    <li><a href="{{route('view.jobprovider')}}">Job Provider Management</a></li>
                    <li><a href="{{route('view.candidate')}}">Candidate Management</a></li>
                    <li><a href="{{route('view.order')}}">Order Management</a></li>
                    <li><a href="{{route('view.subscription')}}">Subscription Plans</a></li>
                    <li><a href="{{route('view.admin')}}">Admin Management</a></li>
                    <li><a href="{{route('view.notification')}}">Notifications</a></li>
                    <li><a href="{{route('profile.admin')}}">Profile</a></li>
                    <li>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <button type="button" class="btn btn-primary" href="{{route('logout')}}"
                            style="border-radius: 0px 0px 24px 24px; width:220px;"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>


                    </li>
                </ul>
            </div>

        </div>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="sidebar col-lg-2 col-md-3 p-0 ">

            <div class=" col-md-3 ">
                <img src="../../../assets/logo.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="justify-content-center">
            <ul >
            <li><a href="{{route('view.job')}}">Job Management</a></li>
                    <li><a  href="{{route('view.industry')}}">Job Industry Management</a></li>
                    <li><a href="{{route('view.jobprovider')}}">Job Provider Management</a></li>
                    <li><a href="{{route('view.candidate')}}">Candidate Management</a></li>
                    <li><a href="{{route('view.order')}}">Order Management</a></li>
                    <li><a href="{{route('view.subscription')}}">Subscription Plans</a></li>
                    <li><a href="{{route('view.admin')}}">Admin Management</a></li>
                    <li><a href="{{route('view.notification')}}">Notifications</a></li>
                    <li><a href="{{route('profile.admin')}}">Profile</a></li>
                    <li>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <button type="button" class="btn btn-primary" href="{{route('logout')}}"
                            style="border-radius: 0px 0px 24px 24px; width:220px;"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>


                    </li>
        </div>
    </div>
</div>
       
        <div class="col-lg-10 col-xl-10 col-md-12" id="main">

<nav class="navbar navbar-light col-md-12 ">

    <h3 class=" mt-3  heading" style=""> Job Management</h3>


    <div class=" mt-12 pull-right">

        <div class="w-100">
            <button class="btn " type="button"
                style=" background-color:white;border:none;border-radius:21px; padding: 0px!important; "><img
                    class="user-avatar  pull-right" style="width:44px;       height: 44px;   border-radius: 28%;"
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
<nav class="navbar navbar-light ">
</nav>
<!--Table-->
<div class=" col-md-12 ">
    <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-resp-noscroll"  id="dt-vertical-scroll">
                    <thead>
                        <tr>
                            <th>Job ID</th>
                            <th>Job Name</th>
                            <th>JobProvider Name</th>
                            <th>Experience Required</th>
                            <th>Job Location</th>
                            <th>Shortlist</th>

                        </tr>
                    </thead>
                    @foreach ($job as $jobs)
                    <tbody>

                        <tr>
                            <td>#{{ $jobs->job_id}}</td>
                            <td>{{ $jobs->jobname}}</td>
                            <td>{{ $jobs->jobprovider }}</td>
                            <td>{{ $jobs->experienceyears}}Year {{ $jobs->experiencemonths}}Month</td>
                            <td>{{ $jobs->joblocation}}</td>
                            <input type="hidden" id="jobs_id_{{$jobs->job_id}}" value="{{ $jobs->id }}"/>
                            <td class="text-right" style="width: 10%;">
                                <div class="action-btns d-flex justify-content-end">
                                    @if($jobs->job_applied_details->count() > 0)
                                    <label style="color: #65ab65;"><b>Shortlisted</b></label>
                                    @else
                                    <button onclick="return shortlisted({{$jobs->job_id}});" style="background-color: #3a50b0;border: 0px;color: white;border-radius: 8px;padding-left: 7px;padding-right: 7px;">Shortlist</button>
                                    @endif
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

    </div>
</div>


<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"/>

<script>
 $(document).ready(function () {
  $('#dt-vertical-scroll').dataTable();
});
</script>




<script src="https://code.jquery.com/jquery-1.9.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
    $(document).ready(function($){
    var url = window.location.href;
    $('.sidebar li a[href="'+url+'"]').addClass('active');
});
  
    </script>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>   
<script>
    function shortlisted(id)
    {
        var url = $(location).attr('href'),
        parts = url.split("/"),
        candidate_id = parts[parts.length-1];
        var id = $(`#jobs_id_${id}`).val();
        var url = '{{ route("candidate.shortlisted", ['id' => ':id', 'candidate_id' => ':candidate_id']) }}';
        url = url.replace(':id', id);
        url = url.replace(':candidate_id', candidate_id);
        swal({
                title: "Are you sure want to shortlist this candidate?",
                //text: "You will not be able to recover this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Shortlisted it!",
                cancelButtonText: "No, cancel pls!",
                closeOnConfirm: true,
                closeOnCancel: true
              },
              function(isConfirm) {
                if (isConfirm) {
                   $.ajax({
                            type:'GET',
                            url:url,
                            data:'_token={{ csrf_token() }}',
                            success:function(data){
                              if(data.success==1)
                              {
                                   swal(
                                        'Deleted!',
                                        'Candidate has been shortlisted.',
                                        'success'
                                      );
                                      $('#row'+id).remove();
                                      location.reload();
                              }
                              else
                              {
                                  swal(
                                        'Failed!',
                                        data.message,
                                        'error'
                                      );
                              }
                            },
                            error:function(data)
                            {
                                console.log(data);
                                swal(
                                        'Failed!',
                                        data.message,
                                        'error'
                                      );
                            }
                            
                         });
                }
            });
    }
</script>
