<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;

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


    }

    h3 {
        text-align: left;
        font: normal normal medium 52px/63px Quicksand;

        color: #000000;
        opacity: 1;
    }

    .sidebar ul li {
        padding: 15px;
        color: #000000;
        display: block;

    }

    .sidebar ul li a {
        color: #000000;
        display: block;
    }




    .img-fluid {
        margin-top: 5px;

    }

    /* .sidebar ul li a .far {
        width: 30px;
        color: #bdb8d7 !important;
    } */

    .sidebar ul li:hover {
        background: #daf1d9;



    }

    .sidebar li :hover {
        color: #49B945 !important;
        text-decoration: none;
        border-right: 3px solid #49B945;


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

        #sidenav1 {
            display: none;
        }

    }

</style>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="
https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js
"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<div class="container-fluid col-md-12 h-custom native-scroll">
    <div class="wrapper d-flex ">
        <nav class=" col-lg-3 col-md-3" id="sidenav">
            <div class="sidebar">

                <div class="col-12 d-flex justify-content-center flex-wrap menu ">
                    <div class=" col-lg-12 ">
                        <img src="../Assets/logo.png" class="img-fluid" alt="Sample image">
                    </div>

                    <ul class="justify-content-left">
                        <li><a href="{{route('view.job')}}">Job Management</a></li>
                        <li><a href="{{route('view.industry')}}">Job Indusdry Management</a></li>
                        <li><a href="#">Job Provider Management</a></li>
                        <li><a href="#">Candidate Management</a></li>
                        <li><a href="#">Order Management</a></li>
                        <li><a href="#">Subscription Plans</a></li>
                        <li><a href="#">Admin Management</a></li>
                        <li><a href="#">Notifications</a></li>
                        <li><a href="#">Profile</a></li>
                        <ul>

                            <button type="button" class="btn btn-primary"
                                style="border-radius: 0px 0px 50px 50px; width:250px;">Logout</button>
                            <ul>

                            </ul>

                </div>
            </div>

        </nav>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class=" col-md-3 ">
                <img src="../Assets/logo.png" class="img-fluid" alt="Sample image">
            </div>
            <ul class="navbar-nav mr-auto flex-column vertical-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Job Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Job Provider Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Candidate Management</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Order Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Subscription Plans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admin Management</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>


            </ul>
            <div>

                <button type="button" class="btn btn-primary"
                    style="border-radius: 0px 0px 50px 50px; width:250px;">Logout</button>

            </div>
        </div>

        <div class="col-lg-9  col-md-12" id="main">

            <nav class="navbar navbar-light col-md-12 ">

                <h3 class=" mt-3  heading" style=""> <a  class="navbar-brand">Job Management</a></h3>


                <div class=" mt-12 pull-right">
                    <form class="form-inline my-2 my-lg-0 justify-content-center" method="GET">
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

                    </form>

                </div>


            </nav>


            <nav class="navbar navbar-light ">

            <a class="btn " href="{{ route('get.addjob') }}">  <span class="icons"> <i class="fa fa-plus "
                            aria-hidden="true"></i></span></a>



                <div class="form-group has-search ">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control " placeholder="Search">
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
                                        <th>ApprovalStatus</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                              
                            </table>
                          
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>







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
