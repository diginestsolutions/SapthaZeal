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
    button:focus {outline:0;}

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
        background-image: url('../Assets/1.png');
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
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {

        background-color: #7ECD7C !important;
        border: none !important;
        border-radius: 35px !important;

        }
    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        color: none !important;
    }

    .make-me-sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        padding: 0 15px;
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

        <div class="sidebar  col-lg-2  col-xl-2 col-md-3 p-0 " id="sidenav">
            <div class="make-me-sticky p-0">

                <div class=" col-lg-12 text-center">
                    <img src="../Assets/logo.png" class="img-fluid " width="150" alt="Sample image">
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
        </div>


        <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
            <div class="sidebar col-lg-2 col-md-3 p-0 ">
                <div class="make-me-sticky p-0">
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


                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>

                                <button type="button" class="btn btn-primary" href="{{route('logout')}}"
                                    style="border-radius: 0px 0px 24px 24px; width:220px;"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>


                            </li>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

    </div>

</div>


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
