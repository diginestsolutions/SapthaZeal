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

    th {
        font-size: 15px;
        font-family: 'Quicksand';
    }

    td {
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
        background-image: url('../../../Assets/1.png');
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
    .btn-group button:focus {
    
    outline: none;
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

    @media only screen and (min-width: 1370px) and (max-width: 1605px) {
        ul {
            font-size: 17px;
        }
    }

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

    .button {
        background-color: #fff;
        border: none;
        color: #7ecd7c;
        padding: 9px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
        border: 2px solid;
    }

    .icon2 {
        padding: 8px 10px 12px 10px;
        background: #208CD1;
        color: #208CD1;
        ;
        font-size: 20px;
        text-align: center;
        margin-top: 50px;
        border-radius: 15px;
    }

    .icons2 {
        height: 46px;
        width: 36px;
    }


    .button:hover {
        background-color: #7ecd7c;
        color: #fff;
        border: none;
    }

    .button1 {
        border-radius: 15px;
    }

    .active {
        background-color: #7ecd7c;
        color: #fff;
        border: none;
    }

    .left {
        padding: 5px;
        font-size: 15px;
        color: #208CD1;

    }

    .btn-back {
        background-color: white;
        border-radius: 80px;
        border: none;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:active {
  background: none;
  color: black!important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    
    background-color: #208CD1!important;
    
    border:none !important;
    border-radius:35px!important;
   
}
.dataTables_wrapper .dataTables_paginate  .paginate_button.current:hover {
    
    background-color:#7ECD7C!important; 
    border:none !important;
    border-radius:35px!important;
   
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current{
    color:none!important;
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
                <img src="../../../Assets/logo.png" class="img-fluid " alt="Sample image">
            </div>
            <div class="justify-content-center">
                <ul>
                    <li><a href="{{route('view.job')}}">Job Management</a></li>
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
                    <img src="../Assets/logo.png" class="img-fluid" alt="Sample image">
                </div>
                <div class="justify-content-center">
                    <ul>
                        <li><a href="{{route('view.job')}}">Job Management</a></li>
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
                </div>
            </div>
        </div>
        <div class="col-lg-10  col-md-12" id="main">

            <nav class="navbar navbar-light col-md-12 ">

                <h3 class=" mt-3   heading"> <a class="btn mr-2 " href="{{ route('view.job') }}"><span
                            class="icon2"><button class="btn-back" style="border-radius:50px;
        border:none;"><span class="left"><i class="fa-solid fa-chevron-left"></i></span></button></i></a>View Response
                </h3>



                <div class=" mt-12 pull-right">

                    <div class="w-100">
                        <button class="btn " type="button"
                            style=" background-color:white;border:none;border-radius:21px;  padding: 0px!important; "><img
                                class="user-avatar  pull-right"
                                style="width:44px;     height: 44px;   border-radius: 28%;"
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
            <nav>
                <div class="row col-lg-12">
                    <div class="col-lg-9 btn-group" role="group">
                        <button class="button button1 active" onclick="getResponseValue(1)">Interested
                            Candidates</button>
                        <button class="button button1" onclick="getResponseValue(2)">Scheduled Resumes</button>
                        <button class="button button1" style=" width: 200px;" onclick="getResponseValue(3)">Interview
                            Scheduled</button>
                        <button class="button button1" onclick="getResponseValue(4)">Negotiation</button>
                        <button class="button button1" style="width: 100px;"
                            onclick="getResponseValue(5)">Hired</button>
                    </div>

                    <div class=" has-search col-md-3  pull-right">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class=" form-control form-control-lg " placeholder="Search">
                    </div>

                </div>
            </nav>
            <!--Table-->
            <div class=" col-md-12 ">
                <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <input type="hidden" id="jobs_id" value="{{ $job_id }}" />
                            <table class="table table-resp-noscroll" id="dt-vertical-scroll">
                                <thead>
                                    <tr>
                                        <th style="width:14%">Job Seeker ID</th>
                                        <th style="width:14%">Created Date</th>
                                        <th>Name</th>
                                        <th style="width: 15%">Mobile Number</th>
                                        <th>Email Address</th>
                                        <th>Designation</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($job_response as $response)
                                    <tr>
                                        <td>#{{$response->candidate->candidate_id}}</td>
                                        <td>{{date('d/m/Y', strtotime($response->created_at))}}</td>
                                        <td>{{$response->candidate->name}}</td>
                                        <td>{{$response->candidate->mobile}}</td>
                                        <td>{{$response->candidate->email}}</td>
                                        <td>{{$response->candidate->designation}}</td>
                                        @if($response->applied_status == "interested")
                                        <td style="color: #eea203;">Interested Candidates</td>
                                        @endif
                                        @if($response->applied_status == "scheduled_resumes")
                                        <td style="color: #eea203;">Scheduled Resumes</td>
                                        @endif
                                        @if($response->applied_status == "interview_scheduled")
                                        <td style="color: #eea203;">Interview Scheduled</td>
                                        @endif
                                        @if($response->applied_status == "negotiation")
                                        <td style="color: #eea203;">Negotiation</td>
                                        @endif
                                        @if($response->applied_status == "hired")
                                        <td style="color: #eea203;">Hired</td>
                                        @endif
                                        <td class="text-right" style="width: 10%;">
                                            <div class="action-btns d-flex justify-content-end">
                                                <a href="{{url('admin/job/candidate-details/' . $response->candidate->candidate_id . '/' . $job_id)}}"
                                                    data-popup="tooltip" title="Edit" data-placement="bottom"
                                                    class="mt-2" style="margin-right:5px;"><i
                                                        class="fa fa-edit"></i></a>

                                                <a href="{{ route('response.candidate.chatbox',$response->candidate->candidate_id) }}"
                                                    data-popup="tooltip" title="Edit" data-placement="bottom"
                                                    class="mt-2" style="margin-right:5px;"><i
                                                        class="fa fa-commenting-o"></i></a>
                                            </div>
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


        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script>
            function getResponseValue(id) {
                var job_id = $(`#jobs_id`).val();
                var url = '{{ route("job.response.statuslist", ":id") }}';
                url = url.replace(':id', id);

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        'job_id': job_id,
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function (data) {
                        if (data.success == 1) {
                            var res = '';
                            $.each(data.data, function (key, value) {
                                var userDate = value.created_at;
                                var date_string = moment(userDate).format(
                                'DD/MM/YYYY'); //moment(userDate, "yyyy-MM-dd'T'HH:mm:ssZ").format("MM-DD-YYYY");
                                var status = '';
                                if (value.applied_status == "interested")
                                    status = "Interested Candidates";
                                if (value.applied_status == "scheduled_resumes")
                                    status = "Scheduled Resume";
                                if (value.applied_status == "interview_scheduled")
                                    status = "Interview Scheduled";
                                if (value.applied_status == "negotiation")
                                    status = "Negotiation";
                                if (value.applied_status == "hired")
                                    status = "Hired";

                                res +=
                                    '<tr>' +
                                    '<td>' + value.candidate.candidate_id + '</td>' +
                                    '<td>' + date_string + '</td>' +
                                    '<td>' + value.candidate.name + '</td>' +
                                    '<td>' + value.candidate.mobile + '</td>' +
                                    '<td>' + value.candidate.email + '</td>' +
                                    '<td>' + value.candidate.designation + '</td>' +
                                    '<td style="color: #eea203;">' + status + '</td>' +
                                    '<td class="text-right" style="width: 10%;">' +
                                    '<div class="action-btns d-flex justify-content-end">' +
                                    '<a href="javascript:void(0)" onclick="return edititem(' + value
                                    .candidate.candidate_id +
                                    ');" data-popup="tooltip" title="Edit" data-placement="bottom" class="mt-2" style="margin-right:5px;"><i class="fa fa-edit"></i></a>' +
                                    '<a href="javascript:void(0)" onclick="return chatbox(' + value
                                    .candidate.candidate_id +
                                    ');" data-popup="tooltip" title="Edit" data-placement="bottom" class="mt-2" style="margin-right:5px;"><i class="fa fa-commenting-o"></i></a>' +
                                    '</div>' +
                                    '</td>' +
                                    '</tr>';
                            });
                                
                            $('tbody').html(res);
                        } else {

                        }
                    },
                    error: function (data) {

                    }
                });
            }

            function edititem(id) {
                var job_id = $(`#jobs_id`).val();
                window.location = window.location.origin + '/admin/job/candidate-details/' + id + '/' + job_id;
            }

            function chatbox(id) {
                window.location = window.location.origin + '/admin/job/candidate-chatbox/' + id;
            }

        </script>
        <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" />

        <script>
            $(document).ready(function () {
                $('#dt-vertical-scroll').dataTable();
            });

        </script>
        <script src="https://code.jquery.com/jquery-1.9.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function ($) {
                var url = window.location.href;
                $('.sidebar li a[href="' + url + '"]').addClass('active');
            });
          
        </script>
<script>
      $('.btn-group button').on('click', function(){
                $(this).siblings().removeClass('active')
                $(this).addClass('active');
            })
</script>