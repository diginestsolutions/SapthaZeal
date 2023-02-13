<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;

    }
    .form-control[readonly] {
    background-color: #fff !important;
   
    }
    .form-control {
    border-radius: 16px !important;
    opacity: 1 !important;
    box-shadow: 0px 3px 6px #0000000d;
    border: none !important;
    height: 40px !important;
    font-size: 15px!important;
}

    body {
        background: #f3f5f9;
    }

    .wrapper {
        position: relative;
    }

    .sidebar {



        background: #fff;
        padding: 10px 0;

        border-radius: 15px;
        margin: 10px 0 10px;
        margin-bottom: 10px;

        overflow: hidden;

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
        padding-bottom: 10px;
        font-size:15px;

    }

    h3 {
        text-align: left;
        font-family: 'Quicksand' !important;
        font-weight: 700 !important;
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




    .img-fluid {
        margin-top: 5px;

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
        padding: 13px;
        background: #7ECD7C;
        color: white;
        font-size: 15px;
        text-align: center;
        border-radius: 15px;
    }

    .icons1 {
        padding: 8px 10px 12px 10px;
        background: #fff;
        color: #208CD1;
        ;
        font-size: 20px;
        text-align: center;
        margin-top: 50px;
        border-radius: 15px;
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

    .container-fluid {
        background-image: url('../../Assets/1.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .table1 {
        border-radius: 15px;
    }

    .has-search .form-control {
        padding-left: 2.375rem;
        width: 180px;
        float: right !important;
        border-radius: 15px;

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
        color: #aaa;
    }

    thead {
        font: normal normal medium 52px/63px Quicksand;

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

    .btn-back {
        background-color: white;
        border-radius: 80px;
        border: none;
    }

    .left {
        padding: 5px;
        font-size: 15px;
        color: #208CD1;

    }

    .title-label {
        font-weight: bold !important;
    }

    .form-control {
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;
        height: 40px !important;
    }

    .form-control1 {
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;
        width: 450px;

    }

    input[type="date"] {
        cursor: pointer;
        border-radius: 4px;
        margin-right: 2px;
        color: #7ECD7C;

    }

    .profile {

display: flex;
padding-left: 50px !important;
}
.select-sup::after {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 26px;
    content: "\f13a";
    position: absolute;
    right: -7px;
    bottom: 20px;
    padding: 0 1em;
    color: #7ECD7C;
    pointer-events: none;
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
<div class="container-fluid col-md-12 h-custom ">
    <div class="wrapper d-flex ">
    <div class="sidebar col-lg-2 col-md-3 p-0" id="sidenav">

              
<div class=" col-lg-10">
    <img src="../../Assets/logo.png" class="img-fluid " alt="Sample image">
</div>
<div class="justify-content-center">
    <ul >
        <li><a href="{{route('view.job')}}">Job Management</a></li>
        <li><a href="{{route('view.industry')}}">Job Industry Management</a></li>
        <li><a href="{{route('view.jobprovider')}}">Job Provider Management</a></li>
        <li><a href="{{route('view.candidate')}}">Candidate Management</a></li>
        <li><a href="{{route('view.order')}}">Order Management</a></li>
        <li><a href="{{route('view.subscription')}}">Subscription Plans</a></li>
        <li><a href="{{route('view.admin')}}">Admin Management</a></li>
        <li><a href="{{route('view.notification')}}">Notifications</a></li>
        <li><a href="{{route('profile.admin')}}">Profile</a></li>
        <ul>

            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                style="display: none;">
                @csrf
            </form>

            <button type="button" class="btn btn-primary" href="{{route('logout')}}"
                style="border-radius: 0px 0px 50px 50px; width:220px;"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>


        </ul>
</div>

</div>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="sidebar col-lg-2 col-md-3 p-0 ">

            <div class=" col-md-3 ">
                <img src="Assets/logo.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="justify-content-center">
            <ul >
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

                <h3 class=" mt-3  heading"> <a class="btn " href="{{ route('view.jobprovider') }}"><span
                            class="icon2"><button class="btn-back" style="border-radius:50px;
            border:none;"><span class="left"><i class="fa-solid fa-chevron-left"></i></span></button></i></a>view Job
                    Provider #{{$provider->provider_id}}
                </h3>




                <div class=" mt-12 pull-right">
                    <form class="form-inline my-2 my-lg-0 justify-content-center" method="GET">
                        <div class="w-100">
                        <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px;  ;padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:44px;        height: 44px;  border-radius: 28%;"
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


                    </form>

                </div>


            </nav>




            <div class=" col-md-12 mt-4 ">
                <div class=" widget-content ">
                    <form  action="{{ route('add.jobprovider') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <div class="row col-lg-12">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label"> Name</label>

                                    <input type="text" class="form-control form-control-lg" name="name" value="{{$provider->user['name']}}" readonly>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label">Official Email Address</label>

                                    <input type="text" class="form-control form-control-lg" name="email"value="{{$provider->user['email']}}" readonly>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label">Mobile Number</label>

                                    <input type="text" class="form-control form-control-lg" name="mobile" value="{{$provider->user['mobile']}}" readonly>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label">Designation</label>

                                    <input type="text" class="form-control form-control-lg" name="designation"value="{{$provider->designation}}" readonly>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label">Company Name</label>

                                    <input type="text" class="form-control form-control-lg" name="company_name" value="{{$provider->company_name}}" readonly>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">






                                <div class=" form-group select-sup">


                                    <label class="title-label">Job Industry</label>

                                    <select class="form-control select " name="jobindustry" required readonly>
                                  
                                    
                                        <option value=" {{$provider->jobindustry }}">{{$provider->jobindustry}}</option>
                                   
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">






                                <div class=" form-group">


                                    <label class="title-label">Address</label>

                                    <input type="text" class="form-control form-control-lg" name="address" value="{{$provider->address}}" readonly>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group select-sup">
                                    <label class="title-label">Subscription Plan</label>

                                    <select class="form-control select " name="subscriptionplan" id="plan" required readonly>
                                 
                                    @foreach($subs as $sub)
                                        <option value="{{$sub->id}}" {{$sub->id == $provider->subscriptionplan ? 'selected' : '' }}>{{$sub->name}}</option>
                                        @endforeach
                                     

                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class=" form-group select-sup">
                                    <label class="title-label">Duration</label>

                                    <select class="form-control select " id="subplan" name="duration" required readonly>


                                        
                                      
                                        <option value=" {{$provider->duration}}" >{{$provider->duration}}</option>
                                       

                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class=" form-group select-sup">
                                    <label class="title-label">Payment Status</label>

                                    <select class="form-control select " name="payment_status" required readonly>

                                    <option value=" {{$provider->payment_status}}" >{{$provider->payment_status}}</option>
                                            
                                    </select>
                                </div>
                            </div>




                            


                            </div>
                        </div>

                </div>
                </form>
            </div>
        </div>
    </div>

</div>


</div>
</div>
