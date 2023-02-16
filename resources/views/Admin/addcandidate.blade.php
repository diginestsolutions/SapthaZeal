<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;

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
        background-image: url('../Assets/1.png');
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
        font-size: 13px;
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
        padding-left: 15px;
    }

    .dropzone {
        width: 100px;
        height: 80px;
        border: 1px dashed #999;
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
                <img src="../assets/logo.png" class="img-fluid " alt="Sample image">
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

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="sidebar col-lg-2 col-md-3 p-0 ">

                <div class=" col-md-3 ">
                    <img src="../assets/logo.png" class="img-fluid" alt="Sample image">
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

                <h3 class=" mt-3  heading"> <a class="btn " href="{{ route('view.candidate') }}"><span
                            class="icon2"><button class="btn-back" style="border-radius:50px;
            border:none;"><span class="left"><i class="fa-solid fa-chevron-left"></i></span></button></i></a>Add
                    Candidate
                </h3>




                <div class=" mt-12 pull-right">
                    <form class="form-inline my-2 my-lg-0 justify-content-center" method="GET">
                        <div class="w-100">
                            <button class="btn " type="button"
                                style=" background-color:white;border:none;border-radius:21px;  padding: 0px!important; "><img
                                    class="user-avatar  pull-right"
                                    style="width:44px;    border-radius: 28%;    height: 44px;"
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
            <form id="msform">
                <ul id="progressbar" style=" text-align: center;">
                    <li class="active" id="account"><strong> Basic Details</strong></li>
                    <li id="personal"><strong> Educational Details </strong></li>
                    <li id="payment"><strong> Experience Details</strong></li>
                    <li id="confirm"><strong>Status</strong></li>
                </ul>

                <br>
                <fieldset>
                    <div class=" col-md-12 ">
                        <div class=" widget-content ">
                            <div class="row col-lg-12">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <label class="title-label"> image</label>
                                    <button class="btn fileicon " type="button">
                                        <div class="dropzone">
                                            <img src="../assets/cloud-computing.png" class="upload-icon" />
                                            <input type="file" name="image" class="upload-input " />
                                        </div>
                                    </button>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label"> Name</label>
                                        <input type="text" class="form-control form-control-lg" name="name">
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label"> Email Address</label>
                                        <input type="text" class="form-control form-control-lg" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">Mobile Number</label>
                                        <input type="text" class="form-control form-control-lg" name="mobile">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">Prefered Job location</label>
                                        <input type="text" class="form-control form-control-lg" name="joblocation">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">Height</label>
                                        <input type="text" class="form-control form-control-lg" name="height">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">weight</label>
                                        <input type="text" class="form-control form-control-lg" name="weight">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">Address</label>
                                        <input type="text" class="form-control form-control-lg" name="address">
                                    </div>
                                </div>
                            </div>
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

                    <a class="btn " href="{{ route('add.education') }}" style="float:left;"> <span class="icons"> <i
                                class="fa fa-plus " aria-hidden="true"></i></span></a>


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
                    <button type="button" class=" next  btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
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
                                                <th>Actions</th>

                                            </tr>
                                        </thead>


                                        </thead>

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
                                                <th>Actions</th>

                                            </tr>
                                        </thead>


                                        </thead>

                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>




                </fieldset>
                <fieldset>
                    <div class=" col-md-12 ">
                        <div class=" widget-content ">
                            <div class="row col-lg-12">
                                <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                                        <div class=" form-group">
                                            <label class="title-label">Is this your current employment?</label>
                                            <label class="con1"><span>Yes</span>
                                                <input type="radio" name="radio1" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="con1"><span>No</span>
                                                <input type="radio" name="radio1">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                        <div class=" form-group select-sup">
                                            <label class="title-label">Notice Period</label>
                                            <select class="form-control select form-control-lg" name="noticeperiod"
                                                required>

                                                <option value="0" class="text-capitalize">
                                                </option>
                                                <option value="Boosted" class="text-capitalize">
                                                    Boosted
                                                </option>
                                                <option value="medicalfield" class="text-capitalize">
                                                    Normal
                                                </option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">Company Name</label>
                                        <input type="text" class="form-control form-control-lg" name="companyname">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">Designation</label>
                                        <input type="text" class="form-control form-control-lg" name="designation">
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group select-date">
                                        <label class="title-label"> Joining Date</label>
                                        <input type="text" class="form-control form-control-lg" name="Joiningdate">
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                    <div class=" form-group">
                                        <label class="title-label">Salary</label>
                                        <input type="text" class="form-control form-control-lg" name="salary">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                    <div class=" form-group">
                                        <label class="title-label">Total Experience</label>
                                        <div class="row  ">
                                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                                <input type="number" class="form-control form-control-lg "
                                                    id="datepicker" placeholder="years" name="years"
                                                    style="text-align: right;">
                                            </div>
                                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                                <input type="number" name="months" class="form-control form-control-lg "
                                                    placeholder="months" required style="text-align: right;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                    <div class=" form-group select-sup">


                                        <label class="title-label">Notice Period</label>


                                        <select class="form-control select form-control-lg" name="noticeperiod"
                                            required>

                                            <option value="0" class="text-capitalize">
                                            </option>
                                            <option value="Boosted" class="text-capitalize">
                                                Boosted
                                            </option>
                                            <option value="medicalfield" class="text-capitalize">
                                                Normal
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">

                                    <div class=" form-group">
                                        <label class="title-label"></i>Job Description</label>

                                        <textarea rows="4" class="form-control1" name="jobdescription"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">

                                    <div class=" form-group">
                                        <label class="title-label"></i>Prefered Skills:</label>
                                        <input type="text" rows="4" name="skill" id="skill" class="form-control"
                                            style=" height: 100px;" />

                                    </div>
                                </div>
                            </div>
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
                    <button type="button" class=" next btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand !important;
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
                    <div class="row ">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                            <div class=" form-group select-sup">
                                <label class="title-label">Status</label>
                                <select class="form-control select form-control-lg" name="education" id="myselection"
                                    required>

                                    <option>Select Status</option>
                                    <option value="ten">10th</option>
                                    <option value="Twelth">12th</option>
                                    <option value="Grad">Graduation/Diploma</option>
                                    <option value="Master">Masters/Post Graduation</option>
                                    <option value="Doct">Doctorate/PHD</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                            <div class=" form-group">
                                <label class="title-label"></i>Download Resume</label>
                                <button class="btn fileicon " type="button">
                                    <div class="dropzone1">
                             
                                   <img src="../assets/pdf.png" class="upload-icon1" />
                                        <input type="file" class="upload-input1" name="image" id="image" required />
                                       
                                    </div>
                                </button>

                             
                            </div>
                        </div>
                    </div>
</br>

                    <button type="button" class="pre  btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand !important;
                          letter-spacing: 0.25px;
    border: none;
    color: #FFFFFF;
    text-transform: uppercase;
    opacity: 1;
    background-color:  #69DB65 ;
   
    font-size: 12px;
    
    font-family: 'Quicksand';" >
                        Download<i class="icon-database-insert ml-1"></i>

                    </button>

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
                    <button type="button" class=" btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand !important;
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
                        Submit<i class="icon-database-insert ml-1"></i>

                    </button>


                    </fiedset>


            </form>
        </div>
    </div>

</div>
</div>
<script>
    function basicDetailsSubmit() {
        alert("aaa");
    }
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
