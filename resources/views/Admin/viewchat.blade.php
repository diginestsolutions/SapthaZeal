
<style>
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
    .card {
    background: #fff;
    transition: .5s;
    border: 0;
    font-family:'Quicksand';
    font-size:12px;
    margin-bottom: 30px;
    border-radius: .55rem;
    position: relative;
    width: 100%;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
}
    .chat-app .people-list {
    width: 280px;
    position: absolute;
    left: 0;
    top: 0;
    padding: 20px;
    z-index: 7
}

.chat-app .chat {
    margin-left: 280px;
    border-left: 1px solid #eaeaea
}

.people-list {
    -moz-transition: .5s;
    -o-transition: .5s;
    -webkit-transition: .5s;
    transition: .5s
}

.people-list .chat-list li {
    padding: 10px 15px;
    list-style: none;
    border-radius: 3px
}

.people-list .chat-list li:hover {
    background: #efefef;
    cursor: pointer
}

.people-list .chat-list li.active {
    background: #efefef
}

.people-list .chat-list li .name {
    font-size: 15px
}

.people-list .chat-list img {
    width: 45px;
    border-radius: 50%
}

.people-list img {
    float: left;
    border-radius: 50%
}

.people-list .about {
    float: left;
    padding-left: 8px
}

.people-list .status {
    color: #999;
    font-size: 13px
}

.chat .chat-header {
    padding: 15px 20px;
    border-bottom: 2px solid #f4f7f6
}

.chat .chat-header img {
    float: left;
    border-radius: 40px;
    width: 40px
}

.chat .chat-header .chat-about {
    float: left;
    padding-left: 10px
}

.chat .chat-history {
    padding: 20px;
    border-bottom: 2px solid #fff
}

.chat .chat-history ul {
    padding: 0
}

.chat .chat-history ul li {
    list-style: none;
    margin-bottom: 30px
}

.chat .chat-history ul li:last-child {
    margin-bottom: 0px
}



.chat .chat-history .message-data img {
    border-radius: 40px;
    width: 40px
}

.chat .chat-history .message-data-time {
    color: #434651;
    padding-left: 6px
}

.chat .chat-history .message {
    color: #444;
    padding: 18px 20px;
    line-height: 26px;
    font-size: 16px;
    border-radius: 7px;
    display: inline-block;
    position: relative
}

.chat .chat-history .message:after {
    bottom: 100%;
    left: 7%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #fff;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .my-message {
    background: #efefef
}

.chat .chat-history .my-message:after {
    bottom: 100%;
    left: 30px;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #efefef;
    border-width: 10px;
    margin-left: -10px
}

.chat .chat-history .other-message {
    background: #e8f1f3;
    text-align: right
}

.chat .chat-history .other-message:after {
    border-bottom-color: #e8f1f3;
    left: 93%
}

.chat .chat-message {
    padding: 20px
}

.online,
.offline,
.me {
    margin-right: 2px;
    font-size: 8px;
    vertical-align: middle
}

.online {
    color: #86c541
}

.offline {
    color: #e47297
}

.me {
    color: #1d8ecd
}

.float-right {
    float: right
}

.clearfix:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0
}

@media only screen and (max-width: 767px) {
    .chat-app .people-list {
        height: 465px;
        width: 100%;
        overflow-x: auto;
        background: #fff;
        left: -400px;
        display: none
    }
    .chat-app .people-list.open {
        left: 0
    }
    .chat-app .chat {
        margin: 0
    }
    .chat-app .chat .chat-header {
        border-radius: 0.55rem 0.55rem 0 0
    }
    .chat-app .chat-history {
        height: 300px;
        overflow-x: auto
    }
}

@media only screen and (min-width: 768px) and (max-width: 992px) {
    .chat-app .chat-list {
        height: 650px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: 600px;
        overflow-x: auto
    }
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
    .chat-app .chat-list {
        height: 480px;
        overflow-x: auto
    }
    .chat-app .chat-history {
        height: calc(100vh - 350px);
        overflow-x: auto
    }
}


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
                <img src="../Assets/logo.png" class="img-fluid" alt="Sample image">
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
    <h3 class=" mt-3   heading"> <a class="btn mr-2 " href="{{ route('view.job') }}"><span class="icon2"><button
                    class="btn-back" style="border-radius:50px;
        border:none;"><span class="left"><i class="fa-solid fa-chevron-left"></i></span></button></i></a>Remarks
    </h3>


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



<!--Table-->
<div class=" col-md-12 ">
    <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
        <div class="card-body">
            <div class="chat">
                <div class="chat-header clearfix">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                            <img
                    class="user-avatar  " style="width:44px;       height: 37px;   border-radius:50%;"
                    src="{{Auth::user()->image}} ">
                            </a>
                            <div class="chat-about">
                                <h6 class="m-b-0" style="font-weight:600 ;">{{Auth::user()->name}}</h6>
                                <div class="status"> <i class="fa fa-circle online"></i> online </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="chat-history">
                    <ul class="m-b-0">
                        @foreach($message as $message)
                        @if($message->send_by == 'admin')
                        <li class="clearfix">
                            <div class="message other-message float-right">{{$message->message}}</div>
                        </li>
                        <li class="clearfix">
                            <div class="message-data text-right">
                                <span class="message-data-time" style="color: red;">{{$message->created_at->toDayDateTimeString()}}</span>
                            </div>
                        </li>
                        @else
                        <li class="clearfix">
                            <div class="message my-message">{{$message->message}}</div>
                        </li>
                        <li class="clearfix">
                            <div class="message-data">
                                <span class="message-data-time" style="color: red;">{{$message->created_at->toDayDateTimeString()}}</span>
                            </div>
                        </li>
                        @endif
                        @endforeach()
                    </ul>
                </div>
                <form method="POST" enctype="multipart/form-data" id="meaasgae-form" action="{{ route('send.message') }}" >
                    {{csrf_field()}}
                    <div class="chat-message clearfix">
                        <div class="input-group mb-0">
                            <input type="hidden" name="candidate_id" value="{{$candidate_id}}">
                            <input type="hidden" name="admin_id" value="{{Auth::user()->id}}">
                            <input type="text" name="message" class="form-control" placeholder="Enter text here..."  required>
                            <div class="input-group-prepend">
                                <button type="submit">
                                    <span class="input-group-text" style="   
                                    background-color: #33f839;"><i class="fa fa-send" style="color:white; border-radius:50%"></i></span>
                                </button>
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


