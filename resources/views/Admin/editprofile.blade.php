@extends('layouts.Dashboard')
@section('content')
<style>
    .form-control {
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;
        height: 40px !important;
        font-weight: 100;
        font-size: 15px;
    }
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
    .title-label {
        font-weight: 500;
    }

    .dropzone {
        width: 100px;
        border-radius: 3px;
        text-align: center;
    }

    .upload-icon {



        height: 50px;
        margin-left: px;
        margin-top: -46px;
    }

</style>
<div class="col-lg-10  col-md-12" id="main">

    <nav class="navbar navbar-light col-md-12 ">

        <h3 class=" mt-3  heading" style="">Profile</h3>


        <div class=" mt-12 pull-right p-0">

            <div class="w-100  p-0 ">
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


    <div class=" col-md-12 ">
        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;     height: 599px;">
            <div class="card-body">
                <form class="" action="{{ route('update.admin') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">

                                <input style="display:none" type="file" id="my-file" name="image">

                                <div class="dropzone">

                                    <button class="btn fileicon " type="button"
                                        onclick="document.getElementById('my-file').click()">
                                        <img src="{{Auth::user()->image}} " width="200" height="200" alt=""
                                            style="border-radius:10px;">

                                        <img src="../assets/Group 22.png" class="upload-icon" />



                                </div>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label"> Name</label>

                                    <input type="text" class="form-control form-control-lg" name="name"
                                        value="{{$user->name}}" required>
                                </div>
                            </div>


                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label"> Email Address</label>

                                    <input type="email" class="form-control form-control-lg" name="email"
                                        value="{{$user->email}}" required>
                                       
                                </div>
                            </div>
</div>
           <div class="row">
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 ">




                                <div class=" form-group">
                                    <label class="title-label">Mobile Number</label>

                                    <input type="number" class="form-control form-control-lg" name="phone"
                                        value="{{$user->phone}}" required>
                                       
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label">Designation</label>

                                    <input type="text" class="form-control form-control-lg" name="designation"
                                        value="{{$user->designation}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                <div class="text-center">

                    <button type="submit" class="btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
                            letter-spacing: 1px;
                            border:none;
                            color: #FFFFFF;
                            text-transform: uppercase;
                            opacity: 1;
                            background-image: linear-gradient(to right,  #69DB65 51%, #208CD1 100%);

                            ;">
                        UPDATE
                        <i class="icon-database-insert ml-1"></i>
                    </button>




                </div>
            </div>
            </form>
        </div>

    </div>
</div>




</div>

@endsection
