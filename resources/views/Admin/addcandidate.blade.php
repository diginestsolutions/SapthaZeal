<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;

    }
    .progressbar {
  counter-reset: step;
}
.progressbar li {
  list-style: none;
  display: inline-block;
  width: 30.33%;
  position: relative;
  text-align: center;
  cursor: pointer;
}
.progressbar li:before {
  content: counter(step);
  counter-increment: step;
  width: 30px;
  height: 30px;
  line-height : 30px;
  border: 1px solid #ddd;
  border-radius: 100%;
  display: block;
  text-align: center;
  margin: 0 auto 10px auto;
  background-color: #fff;
}
.progressbar li:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: #ddd;
  top: 15px;
  left: -50%;
  z-index : -1;
}
.progressbar li:first-child:after {
  content: none;
}
.progressbar li.active {
  color: green;
}
.progressbar li.active:before {
  border-color: green;
} 
.progressbar li.active + li:after {
  background-color: green;
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
                 <img src="../Assets/logo.png" class="img-fluid " alt="Sample image">
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
                <img src="../Assets/logo.png" class="img-fluid" alt="Sample image">
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
                        class="user-avatar  pull-right" style="width:26px;    border-radius: 28%;"
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
            <ul class="progressbar">
        <li class="active">Basic Details</li>
        <li>Educational Details</li>
        <li>Experience Details</li>
      </ul>
         
            <div class=" col-md-12 ">
                <div class=" widget-content ">
                    <form class="" action="{{ route('add.candidate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                    <div class="row col-lg-12">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                           
                                <label class="title-label"> image</label>



                                <button class="btn fileicon " type="button">
                                    <div class="dropzone">
                                        <img src="../assets/cloud-computing.png" class="upload-icon" />
                                        <input type="file" name="image"  class="upload-input " />
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
