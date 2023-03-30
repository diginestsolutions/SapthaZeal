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
    input::-webkit-datetime-edit{ color: transparent; }
input:focus::-webkit-datetime-edit{ color: #000; }
    input[type="date"]::-webkit-calendar-picker-indicator {
  cursor: pointer;
  border-radius: 4px;
  filter: invert(1) sepia(100%) saturate(100000%) hue-rotate(170deg);
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

        #sidenav1 {
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

    }

    .form-control1 {
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;
        width: 450px;
        padding: 3px;

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
   

    .profile {

display: flex;
padding-left: 50px !important;
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
    <div class="sidebar col-lg-2 col-md-3 p-0">

              
    <div class=" col-lg-12 text-center">
                    <img src="../../Assets/logo.png" class="img-fluid " width="150" alt="Sample image">
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

            <div class=" col-md-3 ">
                <img src="../../Assets/logo.png" class="img-fluid" alt="Sample image">
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

        <div class="col-lg-10  col-md-12" id="main">

            <nav class="navbar navbar-light col-md-12 ">

                <h3 class=" mt-3   heading"> <a class="btn mr-2 " href="{{ route('view.job') }}"><span class="icon2"><button
                                class="btn-back" style="border-radius:50px;
            border:none;"><span class="left"><i class="fa-solid fa-chevron-left"></i></span></button></i></a>Add Job
                </h3>




                <div class=" mt-12 pull-right">

                    <div class="w-100">
                    <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px; padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:44px;       height: 44px;   border-radius: 28%;"
                        src="{{Auth::guard('admin')->user()->image}} ">
                    <h6 class="profile">{{Auth::guard('admin')->user()->name}}</h6><span
                        style="font-size: 12px;font-weight:200px; padding-left:56px;!important;    font-weight: 200!important; ">{{Auth::guard('admin')->user()->role}}</span>
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




            <div class=" col-md-12 ">
                <div class=" widget-content ">
                    <form class="" action="{{ route('create.job') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <div class="row col-lg-12">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                <div class=" form-group select-sup">


                                    <label class="title-label">Job Category</label>


                                    <select class="form-control select form-control-lg" name="jobcategory"  required>
                                       
                                            <option value="" class="text-capitalize"> Choose Category</option>
                                            <option value="Boosted" class="text-capitalize">
                                                Boosted
                                            </option>
                                            <option value="medicalfield" class="text-capitalize">
                                                Normal
                                            </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                <div class=" form-group">
                                    <label class="title-label">Job Name</label>

                                    <input type="text" class="form-control form-control-lg" name="jobname" required>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                <div class=" form-group">
                                    <label class="title-label">No. Of Openings</label>

                                    <input type="text" class="form-control form-control-lg" name="openings" required>
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

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                <div class=" form-group">
                                    <label class="title-label">Experience(Min-Max)</label>
                                    <div class="row  ">
                                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                            <input type="number" class="form-control form-control-lg " id="datepicker"
                                                placeholder="Min" name="years" style="text-align: right;">
                                        </div>
                                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                            <input type="number" name="months" class="form-control form-control-lg "
                                                placeholder="Max" required style="text-align: right;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                <div class=" form-group">
                                    <label class="title-label">Salary</label>

                                    <input type="text" class="form-control form-control-lg" name="salary" required>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                <div class=" form-group select-date">
                                    <label class="title-label">Expiry Date</label>

                                    <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="deadline" class="form-control form-control-lg" name="expirydate"
                                        required>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                <div class=" form-group">
                                    <label class="title-label">Job Location</label>

                                    <input type="text" class="form-control form-control-lg" name="joblocation" required>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                <div class=" form-group select-sup">


                                    <label class="title-label">Job Industry</label>

                                    <select class="form-control form-control-lg " name="jobindustry" required>
                                    <option value=""></option>
                                        @foreach($items as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">







                                <div class="text-center">

                                    <button type="submit"
                                        class="btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
letter-spacing: 1.25px;
border:none;
color: #FFFFFF;
text-transform: uppercase;
opacity: 1;
background-image: linear-gradient(to right,  #69DB65 51%, #208CD1 100%);
width: 100px;
;">
                                        Add
                                        <i class="icon-database-insert ml-1"></i>
                                    </button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
<script>
    $(document).ready(function () {

        $('#skill').tokenfield({
       autocomplete: {
                source: ['PHP', 'Codeigniter', 'HTML', 'JQuery', 'Javascript', 'CSS', 'Laravel',
                    'CakePHP', 'Symfony', 'Yii 2', 'Phalcon', 'Zend', 'Slim', 'FuelPHP', 'PHPixie',
                    'Mysql'
                ],
                delay: 100
            },
            showAutocompleteOnFocus: true
        });

        $('#programmer_form').on('submit', function (event) {
            event.preventDefault();
            if ($.trim($('#name').val()).length == 0) {
                alert("Please Enter Your Name");
                return false;
            } else if ($.trim($('#skill').val()).length == 0) {
                alert("Please Enter Atleast one Skill");
                return false;
            } else {
                var form_data = $(this).serialize();
                $('#submit').attr("disabled", "disabled");
                $.ajax({
                    url: "insert.php",
                    method: "POST",
                    data: form_data,
                    beforeSend: function () {
                        $('#submit').val('Submitting...');
                    },
                    success: function (data) {
                        if (data != '') {
                            $('#name').val('');
                            $('#skill').tokenfield('setTokens', []);
                            $('#success_message').html(data);
                            $('#submit').attr("disabled", false);
                            $('#submit').val('Submit');
                        }
                    }
                });
                setInterval(function () {
                    $('#success_message').html('');
                }, 5000);
            }
        });

    });

</script>