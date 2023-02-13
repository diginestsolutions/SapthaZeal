@extends('layouts.Dashboard')
@section('content')
<style>
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
    background-color:  #7ecd7c;
    color:#fff;
    border:none;
}

.button1{
    border-radius:15px;
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

    </style>

<div class="col-lg-10  col-md-12" id="main">

    <nav class="navbar navbar-light col-md-12 ">

    <h3 class=" mt-3   heading"> <a class="btn mr-2 " href="{{ route('view.job') }}"><span class="icon2"><button
                                class="btn-back" style="border-radius:50px;
            border:none;"><span class="left"><i class="fa-solid fa-chevron-left"></i></span></button></i></a>View Response
                </h3>



        <div class=" mt-12 pull-right">

            <div class="w-100">
                <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px;  padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:44px;     height: 44px;   border-radius: 28%;"
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
    <nav>
     <div class="row col-lg-12">
        <div class="col-lg-9">
    <button class="button button1">Interested Candidates</button>
    <button class="button button1">Scheduled Resumes</button>
    <button class="button button1" style="    width: 200px;">Interview Scheduled</button>
    <button class="button button1">Negotiation</button>
    <button class="button button1"  style="    width: 100px;">Hired</button>
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
                    <table class="table table-resp-noscroll">
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

                           
                    </table>

                </div>
            </div>
        </div>
    </div>




</div>

@endsection


<script>
    function myFunction() {
        if (!confirm("Are You Sure to delete this"))
            event.preventDefault();
    }

</script>








