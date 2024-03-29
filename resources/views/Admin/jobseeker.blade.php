<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;

    }
    input::-webkit-datetime-edit{ color: transparent; }
    input:focus::-webkit-datetime-edit{ color: #000; }
    input[type="date"]::-webkit-calendar-picker-indicator {
        cursor: pointer;
        border-radius: 4px;
        filter: invert(1) sepia(100%) saturate(100000%) hue-rotate(170deg);
    }
.pre{
    margin-left:10px;
}
    .con1 {

        position: relative;
        padding-left: 25px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 15px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .con1 input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */

    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 24px;
        width: 22px;
        background-color: #fff;
        border-radius: 50%;
        border: 1px solid #208CD1;


    }


    /* When the radio button is checked, add a blue background */
    .con1 input:checked~.checkmark {
        background-color: #208CD1;


    }

    th {
        font-size: 14px;
        font-family: 'Quicksand';
    }

    .select-sup::after {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 28px;
        content: "\f13a";
        position: absolute;
        right: -9px;
        bottom: 18px;

        padding: 4px 1em;
        color: #7ECD7C;
        pointer-events: none
    }

    .select-date::after {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 26px;
        content: "\f073";
        position: absolute;
        right: 8px;
        bottom: 23px;
        padding: 0 1em;
        color: #7ECD7C;
        pointer-events: none;
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
        padding-bottom: 10px;
        font-size: 15px;

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

    .dropzone1 {
        width: 215px;
        height: 80px;

        border-radius: 3px;
        text-align: center;
    }

    .upload-icon1 {

        background-color: white;
        border-radius: 10px;
    }

    .upload-input1 {
        position: relative;
        top: -62px;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }


    .icons {
        padding: 11px;
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
        background-image: url('../../../../Assets/1.png');
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

        font-weight: 600 !important;
        font-size: 15px;
        font-family: 'Quicksand';
    }

    .form-control {
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;
        height: 40px !important;
        font-size: 17px !important;
        font-family:'Quicksand' !important;

    }

    .form-control1 {
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;
        width: 450px;
        font-family:'Quicksand' !important;
        font-size: 17px !important;

    }

    input[type="date"] {
        cursor: pointer;
        border-radius: 4px;
        margin-right: 2px;
        color: #7ECD7C;


    }

    .profile {
        display: flex;
        padding-left: 15px;
    }

    .dropzone {
        width: 100px;
        height: 80px;
       
        border-radius: 3px;
        text-align: center;
    }

    .upload-icon {
        margin: 25px 2px 2px 2px;
        background-color: #208CD1;
        border-radius: 5px;
    }

    .upload-input {
        position: relative;
        top: -62px;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }

    .btn1 {
        display: block;
        width: 140px;
        height: 40px;
        background: darkmagenta;
        color: #fff;
        border-radius: 3px;
        border: 0;
        box-shadow: 0 3px 0 0 hotpink;
        transition: all 0.3s ease-in-out;
        font-size: 14px;
    }

    .btn1:hover {
        background: rebeccapurple;
        box-shadow: 0 3px 0 0 deeppink;
    }

    .profile {

        display: flex;
        padding-left: 50px !important;
    }

    p {
        color: grey
    }

    h1 {
        text-transform: uppercase;
        color: green;
        font-weight: normal;
        text-align: center;
        margin: 10;
        padding: 10
    }

    #heading {
        text-transform: uppercase;
        color: green;
        font-weight: normal
    }

    #msform {
        position: relative;
        margin-top: 20px
    }

    #msform fieldset {
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }


    #msform input:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid green;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: green;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
    }

    #msform .action-button:hover {
        background-color: #311B92
    }

    #msform .action-button:focus {
        background-color: #311B92
    }

    #msform .action-button-pre {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-pre:hover {
        background-color: #000000
    }

    #msform .action-button-pre:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: green;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: green;
        font-weight: normal
    }

    .steps {
        font-size: 15px;
        color: gray;
        margin-bottom: 1px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 20px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #48BA48;
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400;
        font-family: 'Quicksand';
    }

    #progressbar #account:before {
        content: "\f13e";
        width: 37px;
        height: 52px;
    }

    #progressbar #personal:before {
        content: "\f007";
        width: 37px;
        height: 52px;
    }

    #progressbar #payment:before {
        content: "\f030";
        width: 37px;
        height: 52px;
    }

    #progressbar #confirm:before {
        content: "\f00c";
        width: 37px;
        height: 52px;
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before {
        background: #48BA48;
    }

    #progressbar li.active:after {
        background: #48BA48;

    }

    .progress {
        height: 20px
    }

    .pbar {
        background-color: green
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }

    .make-me-sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;

        padding: 0 15px;
    }

</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
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
            <div class="make-me-sticky p-0">

                <div class=" col-lg-10">
                    <img src="../../../../Assets/logo.png" class="img-fluid " alt="Sample image">
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
                        <ul>

                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            <button type="button" class="btn btn-primary" href="{{route('logout')}}"
                                style="border-radius: 0px 0px 50px 50px; width:220px;"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>


                        </ul>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="sidebar col-lg-2 col-md-3 p-0 ">

                <div class=" col-md-3 ">
                    <img src="../../../Assets/logo.png" class="img-fluid" alt="Sample image">
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

                <h3 class=" mt-3  heading"> <a class="btn " href="{{ route('view.job') }}"><span
                            class="icon2"><button class="btn-back" style="border-radius:50px;
            border:none;"><span class="left"><i class="fa-solid fa-chevron-left"></i></span></button></i></a>Jobseeker
                    #{{$candidate->candidate_id}}</h3>




                <div class=" mt-12 pull-right">

                    <div class="w-100">
                    <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px; padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:44px;       height: 44px;   border-radius: 28%;"
                        src="{{Auth::guard('admin')->user()->image}} ">
                    <h6 class="profile">{{Auth::guard('admin')->user()->name}}</h6><span
                        style="font-size: 12px;font-weight:200px; padding-left:56px;!important;    font-weight: 200!important; ">{{Auth::guard('admin')->user()->role}}</span>
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
            <div id="msform">
                <ul id="progressbar" style=" text-align: center;">
                    <li class="active" id="account"><strong> Basic Details</strong></li>
                    <li id="personal"><strong> Educational Details </strong></li>
                    <li id="payment"><strong> Experience Details</strong></li>
                    <li id="confirm"><strong>Status</strong></li>
                </ul>


                <br>
                <input type="hidden" id="candidate_id" value="{{$candidate->id}}" />
                <fieldset>
                    <div class=" col-md-12 ">
                        <div class=" widget-content ">
                            <form method="POST" enctype="multipart/form-data" id="image-upload"
                                action="javascript:void(0)">
                                {{csrf_field()}}
                                <div class="row col-lg-12">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <label class="title-label"> image </label>
                                        <div class="dropzone">
                                            <img src="{{$candidate->image}} " width="200" height="200" alt=""
                                                style="border-radius:10px;">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class=" form-group">
                                            <label class="title-label"> Name </label>
                                            <input type="text" class="form-control form-control-lg" id="bname"
                                                name="name" value="{{$candidate->name}}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class=" form-group">
                                            <label class="title-label"> Email Address </label>
                                            <input type="text" class="form-control form-control-lg" id="bemail"
                                                name="email" value="{{$candidate->email}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class=" form-group">

                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class=" form-group">
                                            <label class="title-label">Mobile Number </label>
                                            <input type="text" class="form-control form-control-lg" id="bmobile"
                                                name="mobile" value="{{$candidate->mobile}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class=" form-group">
                                            <label class="title-label">Prefered Job location </label>
                                            <input type="text" class="form-control form-control-lg" id="bjoblocation"
                                                name="joblocation" value="{{$candidate->joblocation}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class=" form-group">
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class=" form-group">
                                            <label class="title-label">Height</label>
                                            <input type="text" class="form-control form-control-lg" id="bheight"
                                                name="height" value="{{$candidate->height}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                        <div class=" form-group">
                                            <label class="title-label">weight</label>
                                            <input type="text" class="form-control form-control-lg" id="bweight"
                                                name="weight" value="{{$candidate->weight}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12">
                                        <div class=" form-group">
                                            <label class="title-label">Address</label>
                                            <input type="text" class="form-control form-control-lg" id="baddress"
                                                name="address" value="{{$candidate->address}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <button type="button" class="next  btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand !important;
                          letter-spacing: 0.25px;
    border: none;
    color: #FFFFFF;
    text-transform: uppercase;
    text-align:center;
    opacity: 1;
    background-image: linear-gradient(to right, #69DB65 51%, #208CD1 100%);
    width: 90px;
    font-size: 14px;
    font-family: 'Quicksand';">
                        Next<i class="icon-database-insert ml-1"></i>



                </fieldset>
                <fieldset>

                    <!-- <a class="btn " href="{{ route('add.education') }}" style="float:left;"> <span class="icons"> <i
                                class="fa fa-plus " aria-hidden="true"></i></span></a>-->

                    <!-- <a class="btn " href="" data-toggle="modal" data-target="#educationModal"> <span class="icons"> <i
                    class="fa fa-plus " aria-hidden="true"></i></span></a>-->
                    <button type="button" class="pre  btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand !important;
                          letter-spacing: 0.25px;
    border: none;
    color: #FFFFFF;
    text-transform: uppercase;
    opacity: 1;
    background-image: linear-gradient(to right, #69DB65 51%, #208CD1 100%);
    width: 90px;
    float:right;
    font-size: 14px;
    font-family: 'Quicksand';">
                        Previous<i class="icon-database-insert ml-1"></i>

                    </button>
                    <button type="button" class=" next btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
                          letter-spacing: 0.25px;
    border: none;
    color: #FFFFFF;
    text-transform: uppercase;
    opacity: 1;
    background-image: linear-gradient(to right, #69DB65 51%, #208CD1 100%);
    width: 90px;
    float:right;
    font-size: 14px;
    font-family: 'Quicksand';">
                        Next<i class="icon-database-insert ml-1"></i>
                    </button>

                    <div class=" col-md-12 ">
                        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;margin-top: 43px;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>Education</th>
                                                <th>Board</th>
                                                <th>Pass Out</th>
                                                <th>School Medium</th>
                                                <th>Marks Obtained(%)</th>

                                            </tr>
                                        </thead>
                                        <tbody id="tbodyfirst">
                                            @if($candidate->candidate_education)
                                            @foreach($candidate->candidate_education as $education)
                                            @if($education->education == 1 || $education->education == 2)
                                            <tr>
                                                @if($education->education == 1)
                                                <td>10th</td>
                                                @endif
                                                @if($education->education == 2)
                                                <td>12th</td>
                                                @endif
                                                <td>{{$education->board}}</td>
                                                <td>{{$education->passout}}</td>
                                                <td>{{$education->school_medium}}</td>
                                                <td>{{$education->mark_obtained}}</td>

                                            </tr>
                                            @endif
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-12 ">
                        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;margin-top: 23px;">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>Education</th>
                                                <th>University</th>
                                                <th>Course</th>
                                                <th>Specialization</th>
                                                <th>Type</th>
                                                <th>Pass Out</th>
                                                <th>Marks Obtained(%)</th>

                                            </tr>
                                        </thead>
                                        <tbody id="tbodysecond">
                                            @if($candidate->candidate_education)
                                            @foreach($candidate->candidate_education as $education)
                                            @if($education->education == 3 || $education->education == 4 ||
                                            $education->education == 5)
                                            <tr>
                                                @if($education->education == 3)
                                                <td>Graduation/Diploma</td>
                                                @endif
                                                @if($education->education == 4)
                                                <td>Masters/Post Graduation</td>
                                                @endif
                                                @if($education->education == 5)
                                                <td>Doctorate/PHD</td>
                                                @endif
                                                <td>{{$education->university}}</td>
                                                <td>{{$education->course}}</td>
                                                <td>{{$education->specialization}}</td>
                                                <td>{{$education->course_type}}</td>
                                                <td>{{$education->passout}}</td>
                                                <td>{{$education->mark_obtained}}</td>

                                            </tr>
                                            @endif
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class=" col-md-12 ">
                        <div class=" widget-content ">
                            <form method="POST" enctype="multipart/form-data" id="experience-form" action="javascript:void(0)" >
                            {{csrf_field()}}
                            @if($candidate->candidate_experience)
                            <div class="row col-lg-12">
                                <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <!--<div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                                        <div class=" form-group">
                                            <label class="title-label">Is this your current employment?</label>
                                            @if($candidate->candidate_experience->current_employee_status == 'on')
                                            <label class="con1"><span>Yes</span>
                                                <input type="radio" name="current_employee_status" checked readonly>
                                                <span class="checkmark"></span>
                                            </label>
                                            @else
                                            <label class="con1"><span>No</span>
                                                <input type="radio" name="current_employee_status" readonly>
                                                <span class="checkmark"></span>
                                            </label>
                                            @endif
                                            @if($candidate->candidate_experience->current_employee_status == 'off')
                                            <label class="con1"><span>Yes</span>
                                                <input type="radio" name="current_employee_status" readonly>
                                                <span class="checkmark"></span>
                                            </label>
                                            @else
                                            <label class="con1"><span>No</span>
                                                <input type="radio" name="current_employee_status" checked readonly>
                                                <span class="checkmark"></span>
                                            </label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                        <div class=" form-group">
                                            <label class="title-label">Employement Type</label>
                                            @if($candidate->candidate_experience->employement_type == "fulltime")
                                            <input type="text" class="form-control form-control-lg" name="current_employee_status" value="Full Time" readonly>
                                            @endif
                                            @if($candidate->candidate_experience->employement_type == "parttime")
                                            <input type="text" class="form-control form-control-lg" name="current_employee_status" value="Part Time" readonly>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">Company Name</label>
                                        <input type="text" class="form-control form-control-lg" name="company_name" value="{{$candidate->candidate_experience->company_name}}" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">Designation</label>
                                        <input type="text" class="form-control form-control-lg" name="designation" value="{{$candidate->candidate_experience->designation}}" readonly>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label"> Joining Date</label>
                                        <input type="text" class="form-control form-control-lg" name="Joining_date" value="{{$candidate->candidate_experience->Joining_date}}" readonly>
                                    </div>
                                </div>-->

                                
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                    <div class=" form-group">
                                        <label class="title-label">Total Experience</label>
                                        <div class="row  ">
                                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                                <input type="number" class="form-control form-control-lg "
                                                    id="datepicker" placeholder="years" name="years" value="{{$candidate->candidate_experience->years}}"
                                                    style="text-align: right;" readonly>
                                            </div>
                                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                                <input type="number" name="months" class="form-control form-control-lg "
                                                    placeholder="months" required style="text-align: right;" value="{{$candidate->candidate_experience->months}}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">Notice Period</label>
                                        @if($candidate->candidate_experience->notice_period == "1month")
                                        <input type="text" class="form-control form-control-lg" name="current_employee_status" value="1 Month" readonly>
                                        @endif
                                        @if($candidate->candidate_experience->notice_period == "3month")
                                        <input type="text" class="form-control form-control-lg" name="current_employee_status" value="3 Month" readonly>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">Salary</label>
                                        <input type="text" class="form-control form-control-lg" name="salary" value="{{$candidate->candidate_experience->salary}}" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label"></i>Job Description</label>
                                        <textarea rows="4" class="form-control1" name="job_description" readonly>{{$candidate->candidate_experience->job_description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label"></i>Prefered Skills:</label>
                                        <input type="text" rows="4" name="skill" id="skill" class="form-control"
                                            style=" height: 100px;" value="{{$candidate->candidate_experience->skill}}" readonly/>

                                    </div>
                                </div>
                                <div class=" col-md-12 ">
                                    <div class="card  col-lg-12 col-md-12" style="border-radius:15px;margin-top: 23px;">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table ">
                                                    <thead>
                                                        <tr>
                                                            <th>current employment</th>
                                                            <th>Employement Type</th>
                                                            <th>Company Name</th>
                                                            <th>Designation</th>
                                                            <th>Joining Date</th>
                                                            <th>Leaving Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbodythird">
                                                        @if($candidate->candidate_company_details)
                                                            @foreach($candidate->candidate_company_details as $company)
                                                            <tr>
                                                                @if($company->current_employee_status == "on")
                                                                <td>Yes</td>
                                                                @else
                                                                <td>No</td>
                                                                @endif
                                                                <td>{{$company->employement_type}}</td>
                                                                <td>{{$company->company_name}}</td>
                                                                <td>{{$company->designation}}</td>
                                                                <td>{{$company->Joining_date}}</td>
                                                                <td>{{$company->leaving_date}}</td>
                                                            </tr>
                                                            @endforeach
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </form>
                        </div>
                    </div>
                    <button type="button" class="pre  btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand !important;
                          letter-spacing: 0.25px;
    border: none;
    color: #FFFFFF;
    text-transform: uppercase;
    opacity: 1;
    background-image: linear-gradient(to right, #69DB65 51%, #208CD1 100%);
    width: 90px;
    font-size: 14px;
    font-family: 'Quicksand';">
                        PREVIOUS<i class="icon-database-insert ml-1"></i>

                    </button>
                    <button type="button" class="next btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand !important;
                          letter-spacing: 0.25px;
    border: none;
    color: #FFFFFF;
    text-transform: uppercase;
    opacity: 1;
    background-image: linear-gradient(to right, #69DB65 51%, #208CD1 100%);
    width: 90px;
    font-size: 14px;
    font-family: 'Quicksand';">
                        Next<i class="icon-database-insert ml-1"></i>

                    </button>

                </fieldset>
                <fieldset>
                    <form method="POST" enctype="multipart/form-data" id="candidate-status-form"
                        action="javascript:void(0)">
                        {{csrf_field()}}
                        <div class="row ">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                <div class=" form-group select-sup">
                                    <label class="title-label">Status</label>
                                    <select class="form-control select form-control-lg" name="provider_status"
                                        id="candidatestatus" required>
                                        <option>Select Status</option>
                                        <option value="1"
                                            {{@$candidate->candidate_job_applied_details[0]->applied_status == "interested" ? 'selected' : ''}}>
                                            Interested Candidates</option>
                                        <option value="2"
                                            {{@$candidate->candidate_job_applied_details[0]->applied_status == "scheduled_resumes" ? 'selected' : ''}}>
                                            Scheduled Resumes</option>
                                        <option value="3"
                                            {{@$candidate->candidate_job_applied_details[0]->applied_status == "interview_scheduled" ? 'selected' : ''}}>
                                            Interview Scheduled</option>
                                        <option value="4"
                                            {{@$candidate->candidate_job_applied_details[0]->applied_status == "negotiation" ? 'selected' : ''}}>
                                            Negotiation</option>
                                        <option value="5"
                                            {{@$candidate->candidate_job_applied_details[0]->applied_status == "hired" ? 'selected' : ''}}>
                                            Hired</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <input type="hidden" id="jobid" name="jobid" value="{{$jobid}}" />
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class=" form-group">
                                    <label class="title-label">Download Resume</label>
                                    <button class="btn fileicon" type="button">
                                        <div class="text-left">
                                            <img src="../../../../Assets/pdf.png" class="upload-icon1" />
                                            <input type="file" class="upload-input1" name="resume" id="resume"
                                                required />
                                        </div>
                                    </button>


                                </div>

                                @if($candidate->resume)
                                <a href="{{@$candidate->resume}}" target="_blank" download>
                                    <button type="button"
                                        class="btn btn-primary  text-left btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand !important;
                          letter-spacing: 0.25px;
    border: none;
    color: #FFFFFF;
    text-transform: uppercase;
    opacity: 1;
    background-color:  #69DB65 ;
   
    font-size: 12px;
    margin-top: -26px;

    font-family: 'Quicksand';">
                                        Download<i class="icon-database-insert ml-1"></i>
                                    </button></a>@endif
                               
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class=" form-group">
                                    <label class="title-label"></i>Cover Letter</label>
                                    <textarea rows="5" class="form-control1" name="cover_letter"
                                       >{{@$candidate->cover_letter}}</textarea>
                                </div>
                            </div>
                        </div>
                     
                        </br>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class=" form-group select-sup">
                                    <label class="title-label">Candidate Status <span
                                            style="color: red;">*</span></label>
                                    <select class="form-control select form-control-lg" name="candidate_status"
                                        id="candidatestatusselect" required>
                                        <option>Select Option</option>
                                        <option value="1"
                                            {{@$candidate->candidate_job_applied_details[0]->candidate_status == "applied" ? 'selected' : ''}}>
                                            Applied</option>
                                        <option value="2"
                                            {{@$candidate->candidate_job_applied_details[0]->candidate_status == "in_progress" ? 'selected' : ''}}>
                                            In Progress</option>
                                        <option value="3"
                                            {{@$candidate->candidate_job_applied_details[0]->candidate_status == "resume_evaluation" ? 'selected' : ''}}>
                                            Resume Evaluation</option>
                                        <option value="4"
                                            {{@$candidate->candidate_job_applied_details[0]->candidate_status == "incomplete_application" ? 'selected' : ''}}>
                                            Incomplete Application</option>
                                        <option value="5"
                                            {{@$candidate->candidate_job_applied_details[0]->candidate_status == "interview_scheduled" ? 'selected' : ''}}>
                                            Interview Scheduled</option>
                                        <option value="6"
                                            {{@$candidate->candidate_job_applied_details[0]->candidate_status == "negotiation" ? 'selected' : ''}}>
                                            Negotiation</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="candidate_status_div">

                        </div>
                    </form>
                    <button type="button" class=" pre btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand !important;
                          letter-spacing: 0.25px;
    border: none;
    color: #FFFFFF;
    text-transform: uppercase;
    opacity: 1;
    background-image: linear-gradient(to right, #69DB65 51%, #208CD1 100%);
    width: 90px;
    float:right;
    font-size: 14px;
    font-family: 'Quicksand';">
                        PREVIOUS<i class="icon-database-insert ml-1"></i>

                    </button>
                    <button type="button" onclick="fileupload()"
                        class=" btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand !important;
                          letter-spacing: 0.25px;
    border: none;
    color: #FFFFFF;
    text-transform: uppercase;
    opacity: 1;
    float:right;
    background-image: linear-gradient(to right, #69DB65 51%, #208CD1 100%);
    width: 90px;
    font-size: 14px;
    font-family: 'Quicksand';">
                        UPDATE<i class="icon-database-insert ml-1"></i>

                    </button>


                    </fiedset>


            </div>
        </div>
    </div>

</div>
</div>
<!------------add education-------------->
<div class="modal fade" id="educationModal" tabindex="-1" role="dialog" aria-labelledby="industryModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="industryModal">{{ __('Add Education') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle " style="    color: #FF0000;"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class=" form-group select-sup">
                        <label class="title-label">Education<span style="color: red;">*</span></label>
                        <select class="form-control select form-control-lg" name="education" id="educationselect"
                            required>
                            <option>Select Option</option>
                            <option value="1">10th</option>
                            <option value="2">12th</option>
                            <option value="3">Graduation/Diploma</option>
                            <option value="4">Masters/Post Graduation</option>
                            <option value="5 ">Doctorate/PHD</option>
                        </select>
                    </div>
                </div>
                <input type="hidden" id="educational_edit_id" />
                <!--------------mydiv------------>
                <div id="showten" class="myDiv">
                    <form id="education-form1" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row col-lg-12">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class=" form-group select-sup">
                                    <label class="title-label">Board<span style="color: red;">*</span></label>
                                    <select class="form-control select form-control-lg" name="board" id="mydivboard"
                                        required>
                                        <option value="">Choose Board</option>
                                        <option value="CBSE" class="text-capitalize">CBSE</option>
                                        <option value="ICSE" class="text-capitalize">ICSE</option>
                                        <option value="ISC" class="text-capitalize">ISC</option>
                                        <option value="Diploma" class="text-capitalize">Diploma</option>
                                        <option value="National Open School" class="text-capitalize">National Open
                                            School</option>
                                        <option value="International Baccalaureate" class="text-capitalize">
                                            International Baccalaureate</option>
                                        <option value="State Boards" class="text-capitalize">State Boards</option>
                                        <option value="Others" class="text-capitalize">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class=" form-group">
                                    <label class="title-label">School Medium<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control form-control-lg" name="schoolmedium"
                                        id="mydivschoolmedium" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class=" form-group">
                                    <label class="title-label">Pass Out<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control form-control-lg" name="passout"
                                        id="mydivpassout" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class=" form-group">
                                    <label class="title-label"></i>Marks Obtained(%)<span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control form-control-lg" name="marks" id="mydivmarks"
                                        required>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                                <div class="text-center">
                                    <button type="button"
                                        class="btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
                                            letter-spacing: 1.25px;
                                            border:none;
                                            color: #FFFFFF;
                                            text-transform: uppercase;
                                            opacity: 1;
                                            background-image: linear-gradient(to right,  #69DB65 51%, #208CD1 100%);
                                            width: 100px;
                                            height:43px;
                                            ;" onclick="eduaction()">
                                        Add
                                        <i class="icon-database-insert ml-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
            <!--------------mydiv1------------>
            <div id="showten" class="myDiv1">
                <form id="education-form2" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row col-lg-12">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class=" form-group select-sup">
                                <label class="title-label">University/Institute<span
                                        style="color: red;">*</span></label>
                                <select class="form-control select form-control-lg" name="university"
                                    id="mydivuniversity" required>
                                    <option value="" class="text-capitalize">Choose University</option>
                                    <option value="Test university" class="text-capitalize">Test university</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label">Course<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="course" id="mydivcourse"
                                    required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label">Specialization<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="specialization"
                                    id="mydivspecialization" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class=" form-group select-sup">
                                <label class="title-label">Course type<span style="color: red;">*</span></label>
                                <select class="form-control select form-control-lg" name="course_type"
                                    id="mydivcoursetype" required>
                                    <option value="Full Time" class="text-capitalize">Full Time</option>
                                    <option value="Part Time," class="text-capitalize">Part Time</option>
                                    <option value="Correspondence/ Distance Learning" class="text-capitalize">
                                        Correspondence/ Distance Learning</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label"></i>Pass Out<span style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="passout"
                                    id="mydivpassout1" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label"></i>Mark Obtained(%)<span
                                        style="color: red;">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="marks" id="mydivmarks1"
                                    required>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-lg gradient-button gradient-button-1"
                                    style="font: normal normal100 20px/31px Quicksand;
                                            letter-spacing: 1.25px;
                                            border:none;
                                            color: #FFFFFF;
                                            text-transform: uppercase;
                                            opacity: 1;
                                            background-image: linear-gradient(to right,  #69DB65 51%, #208CD1 100%);
                                            width: 100px;
                                            height:43px;
                                            ;" onclick="eduaction1()">
                                    Add
                                    <i class="icon-database-insert ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <br />
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
        var current_fs, next_fs, pre_fs;
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;
        setProgressBar(current);
        $(".next").click(function () {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            next_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now) {
                    opacity = 1 - now;
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percentpercent = percent.toFixed();
            $(".pbar")
                .css("width", percent + "%")
        }
        $(".submit").click(function () {
            return false;
        })
    });

</script>
<script>
    $(document).ready(function () {
        $(".myDiv").hide();
        $(".myDiv1").hide();
        $('#educationselect').on('change', function () {
            var demovalue = $(this).val();
            if ($(this).val() == 1 || $(this).val() == 2) {
                $(".myDiv").show();
                $(".myDiv1").hide();
            } else {
                $(".myDiv").hide();
                $(".myDiv1").show();
            }

        });
    });

</script>
<script>
    $('#candidatestatusselect').on('change', function () {
        var demovalue = $(this).val();
        if ($(this).val() == 2 || $(this).val() == 6) {
            res = '<div class="row">' +
                '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">' +
                '<div class=" form-group">' +
                '<label class="title-label"></i>Remark</label>' +
                '<textarea rows="4" class="form-control" name="remark"></textarea>' +
                '</div>' +
                '</div>' +
                '</div>';
            $('#candidate_status_div').html(res);
        }
        if ($(this).val() == 4) {
            res = '<div class="row">' +
                '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">' +
                '<div class=" form-group">' +
                '<label class="title-label"></i>Reason</label>' +
                '<input type="text" class="form-control" name="reson">' +
                '</div>' +
                '</div>' +
                '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">' +
                '<div class=" form-group">' +
                '<label class="title-label"></i>Remark</label>' +
                '<textarea rows="4" class="form-control" name="remark"></textarea>' +
                '</div>' +
                '</div>' +
                '</div>';
            $('#candidate_status_div').html(res);
        }
        if ($(this).val() == 5) {
            res = '<div class="row">' +
                '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">' +
                '<div class=" form-group select-date"">' +
                '<label class="title-label"></i>Date</label>' +
                '<input type="date" class="form-control form-control-lg" name="interview_date">' +
                '</div>' +
                '</div>' +
                '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">' +
                '<div class=" form-group">' +
                '<label class="title-label"></i>Place</label>' +
                '<input type="text" class="form-control" name="interview_place">' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">' +
                '<div class=" form-group">' +
                '<label class="title-label"></i>Remark</label>' +
                '<textarea rows="4" class="form-control" name="remark"></textarea>' +
                '</div>' +
                '</div>' +
                '</div>';
            $('#candidate_status_div').html(res);
        }
    });

</script>
<script>
    function eduaction() {
        var education = $(`#educationselect`).val();
        var candidate_id = $(`#candidate_id`).val();

        var form = $("#education-form1")[0];
        var formData = new FormData(form);
        formData.append("education", education);
        formData.append("candidate_id", candidate_id);
        formData.append("option", 1);

        var edit_id = $(`#educational_edit_id`).val();
        formData.append("educational_edit_id", edit_id);

        var url = '{{ route("add.addeducation", ":id") }}';
        url = url.replace(':id', candidate_id);

        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'json', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
                if (data.success == 1) {
                    $('#educationModal').modal('hide');
                    var res = '';
                    $.each(data.data, function (key, value) {
                        if (value.education == 1 || value.education == 2) {
                            res +=
                                '<tr id = "row1' + value.candidate_education_id + '">' +
                                '<td>' + value.education + '</td>' +
                                '<td>' + value.board + '</td>' +
                                '<td>' + value.passout + '</td>' +
                                '<td>' + value.school_medium + '</td>' +
                                '<td>' + value.mark_obtained + '</td>' +
                                '<td>' +
                                '<div class="action-btns d-flex justify-content-end">' +
                                '<a href="javascript:void(0)" onclick="return edititem(' + value
                                .candidate_education_id +
                                ');" data-popup="tooltip" title="Edit" data-placement="bottom" class="mt-2" style="margin-right:5px;"><i class="fa fa-edit"></i></a>' +
                                '<input type="hidden" id="candidate_education_id_' + value
                                .candidate_education_id + '" value="' + value._id + '"/>' +
                                '<a href="javascript:void(0)" onclick="return deleteitem(' + value
                                .candidate_education_id +
                                ');" data-popup="tooltip" title="Delete" data-placement="bottom" class="mt-2" style="margin-right:5px;"><i class="fa fa-trash"></i></a>' +
                                '</div>' +
                                '</td>' +
                                '</tr>';
                        }
                    });
                    $('#tbodyfirst').html(res);
                } else {

                }
            },
            error: function (data) {

            }
        });
    }

    function eduaction1() {
        var education = $(`#educationselect`).val();
        var candidate_id = $(`#candidate_id`).val();

        var form = $("#education-form2")[0];
        var formData = new FormData(form);
        formData.append("education", education);
        formData.append("candidate_id", candidate_id);
        formData.append("option", 2);

        var edit_id = $(`#educational_edit_id`).val();
        formData.append("educational_edit_id", edit_id);

        var url = '{{ route("add.addeducation", ":id") }}';
        url = url.replace(':id', candidate_id);

        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'json', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function (data) {
                $('#educationModal').modal('hide');
                var res = '';
                $.each(data.data, function (key, value) {
                    if (value.education == 3 || value.education == 4 || value.education == 5) {
                        res +=
                            '<tr id = "row2' + value.candidate_education_id + '">' +
                            '<td>' + value.education + '</td>' +
                            '<td>' + value.university + '</td>' +
                            '<td>' + value.course + '</td>' +
                            '<td>' + value.specialization + '</td>' +
                            '<td>' + value.course_type + '</td>' +
                            '<td>' + value.passout + '</td>' +
                            '<td>' + value.mark_obtained + '</td>' +
                            '<td>' +
                            '<div class="action-btns d-flex justify-content-end">' +
                            '<a href="javascript:void(0)" onclick="return edititem1(' + value
                            .candidate_education_id +
                            ');" data-popup="tooltip" title="Edit" data-placement="bottom" class="mt-2" style="margin-right:5px;"><i class="fa fa-edit"></i></a>' +
                            '<input type="hidden" id="candidate_education_id1_' + value
                            .candidate_education_id + '" value="' + value._id + '"/>' +
                            '<a href="javascript:void(0)" onclick="return deleteitem1(' + value
                            .candidate_education_id +
                            ');" data-popup="tooltip" title="Delete" data-placement="bottom" class="mt-2" style="margin-right:5px;"><i class="fa fa-trash"></i></a>' +
                            '</div>' +
                            '</td>' +
                            '</tr>';
                    }
                });
                $('#tbodysecond').html(res);
            },
            error: function (data) {

            }
        });
    }

</script>
<script>
    function edititem(id) {
        var id = $(`#candidate_education_id_${id}`).val();
        var url = '{{ route("candidate.education.edit", ":id") }}';
        url = url.replace(':id', id);
        if (id) {
            $.ajax({
                type: 'get',
                url: url,
                success: function (data) {
                    //console.log(data.data);
                    if (data.success == 1) {
                        $(`#educational_edit_id`).val(data.data._id);
                        $(`#educationselect`).val(data.data.education);
                        if (data.data.education == 1 || data.data.education == 2) {
                            $(".myDiv").show();
                            $(".myDiv1").hide();
                            $(`#mydivboard`).val(data.data.board);
                            $(`#mydivschoolmedium`).val(data.data.school_medium);
                            $(`#mydivpassout`).val(data.data.passout);
                            $(`#mydivmarks`).val(data.data.mark_obtained);
                        } else {
                            $(".myDiv").hide();
                            $(".myDiv1").show();
                            $(`#mydivuniversity`).val(data.data.university);
                            $(`#mydivcourse`).val(data.data.course);
                            $(`#mydivspecialization`).val(data.data.specialization);
                            $(`#mydivcoursetype`).val(data.data.course_type);
                            $(`#mydivpassout1`).val(data.data.passout);
                            $(`#mydivmarks1`).val(data.data.mark_obtained);
                        }
                        $('#educationModal').modal('show');
                    }
                }
            })
        }
    }

    function edititem1(id) {
        var id = $(`#candidate_education_id1_${id}`).val();
        var url = '{{ route("candidate.education.edit", ":id") }}';
        url = url.replace(':id', id);
        if (id) {
            $.ajax({
                type: 'get',
                url: url,
                success: function (data) {
                    //console.log(data.data);
                    if (data.success == 1) {
                        $(`#educational_edit_id`).val(data.data._id);
                        $(`#educationselect`).val(data.data.education);
                        if (data.data.education == 1 || data.data.education == 2) {
                            $(".myDiv").show();
                            $(".myDiv1").hide();
                            $(`#mydivboard`).val(data.data.board);
                            $(`#mydivschoolmedium`).val(data.data.school_medium);
                            $(`#mydivpassout`).val(data.data.passout);
                            $(`#mydivmarks`).val(data.data.mark_obtained);
                        } else {
                            $(".myDiv").hide();
                            $(".myDiv1").show();
                            $(`#mydivuniversity`).val(data.data.university);
                            $(`#mydivcourse`).val(data.data.course);
                            $(`#mydivspecialization`).val(data.data.specialization);
                            $(`#mydivcoursetype`).val(data.data.course_type);
                            $(`#mydivpassout1`).val(data.data.passout);
                            $(`#mydivmarks1`).val(data.data.mark_obtained);
                        }
                        $('#educationModal').modal('show');
                    }
                }
            })
        }
    }

    function deleteitem(id) {
        var row_id = id;
        var id = $(`#candidate_education_id_${id}`).val();
        var url = '{{ route("education.destroy", ":id") }}';
        url = url.replace(':id', id);
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel pls!",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: '_token={{ csrf_token() }}',
                        success: function (data) {
                            if (data.success == 1) {
                                swal(
                                    'Deleted!',
                                    'Education has been deleted.',
                                    'success'
                                );
                                console.log('#row1' + id);
                                $('#row1' + row_id).remove();
                            } else {
                                swal(
                                    'Failed!',
                                    data.message,
                                    'error'
                                );
                            }
                        },
                        error: function (data) {
                            console.log(data);
                            swal(
                                'Failed!',
                                data.message,
                                'error'
                            );
                        }

                    });
                } else {
                    swal("Cancelled", "Education is safe :)", "error");
                }
            });
    }

    function deleteitem1(id) {
        var row_id = id;
        var id = $(`#candidate_education_id1_${id}`).val();
        var url = '{{ route("education.destroy", ":id") }}';
        url = url.replace(':id', id);
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel pls!",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: '_token={{ csrf_token() }}',
                        success: function (data) {
                            if (data.success == 1) {
                                swal(
                                    'Deleted!',
                                    'Education has been deleted.',
                                    'success'
                                );
                                $('#row2' + row_id).remove();
                            } else {
                                swal(
                                    'Failed!',
                                    data.message,
                                    'error'
                                );
                            }
                        },
                        error: function (data) {
                            console.log(data);
                            swal(
                                'Failed!',
                                data.message,
                                'error'
                            );
                        }

                    });
                } else {
                    swal("Cancelled", "Education is safe :)", "error");
                }
            });
    }

</script>
<script>
    $(document).ready(function () {
        var current_fs, next_fs, pre_fs;
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;
        setProgressBar(current);
        $(".next2").click(function () {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            var data = $('#experience-form').serialize();
            var form = $("#experience-form")[0];
            var form_data = new FormData(form);
            var candidate_id = $("#candidate_id").val();
            form_data.append("candidate_id", candidate_id);
            var success_variable = false;

            var url = '{{ route("update.candidate.experience") }}';
            $.ajax({
                type: 'POST',
                url: url,
                dataType: 'json', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                success: function (data) {
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass(
                    "active");
                    next_fs.show();
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function (now) {
                            opacity = 1 - now;
                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });
                    setProgressBar(++current);
                    //window.location = window.location.origin+'/admin/candidate';  
                },
                error: function (data) {

                }
            });
        });
        $(".pre").click(function () {
            current_fs = $(this).parent();
            pre_fs = $(this).parent().prev();
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            pre_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now) {
                    opacity = 1 - now;
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    pre_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percentpercent = percent.toFixed();
            $(".pbar")
                .css("width", percent + "%")
        }
        $(".submit").click(function () {
            return false;
        })
    });

</script>
<script>
    function fileupload() {
        var file_data = $('#resume').prop('files')[0];
        var error = 0;
        if (file_data) {
            var fileType = file_data["type"];
            var validImageTypes = ["application/pdf"];
            if ($.inArray(fileType, validImageTypes) < 0) {
                error++;
                jQuery("label[for='myalue1']").html("Please upload PDF format file.");
                err.style.display = "block";
            }
        }
        if (error == 0) {
            var data = $('#candidate-status-form').serialize();
            var file_data = $('#resume').prop('files')[0];
            var form_data = new FormData($("#candidate-status-form")[0]);
            var candidate_id = $(`#candidate_id`).val();
            form_data.append('candidate_id', candidate_id);
            form_data.append('file', file_data);
            var url = '{{ route("change.candidate.status") }}';
            $.ajax({
                type: 'POST',
                url: url,
                dataType: 'json', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                success: function (data) {
                    window.location = window.location.origin + '/public/admin/candidate';
                },
                error: function (data) {

                }
            });
        }
    }

</script>
