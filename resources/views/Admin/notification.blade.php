@extends('layouts.Dashboard')
@section('content')
<style>
    .form-control {
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;
        height: 40px !important;
    }

    .select-sup::after {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 31px;
        content: "\f13a";
        position: absolute;
        right: -12px;
        bottom: 15px;

        padding: 0 1em;
        color: #7ECD7C;
        pointer-events: none;
    }

</style>
<div class="col-lg-10  col-md-12" id="main">

    <nav class="navbar navbar-light col-md-12 ">

        <h3 class=" mt-3  heading" style="">Notifications</h3>


        <div class=" mt-12 pull-right">

            <div class="w-100">
                <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px; padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:26px;    border-radius: 28%;"
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


    <nav class="navbar navbar-light ">

        <a class="btn " href="" data-toggle="modal" data-target="#registerModal"> <span class="icons"> <i
                    class="fa fa-plus " aria-hidden="true"></i></span></a>



        <div class=" has-search col-md-3">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class=" form-control form-control-lg " placeholder="Search">
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
                                <th>Created Date & Time</th>

                                <th>User Name</th>
                                <th>User Type</th>
                                <th>Heading</th>

                                <th>Actions</th>

                            </tr>
                        </thead>


                        @foreach ($candidate as $noti)
                        <tbody>

                            <tr>

                                <td>{{ $noti->created_at}}</td>
                                <td></td>
                                <td>{{ $noti->usertype}}</td>
                                <td>{{  $noti->heading}}</td>

                                <td class="text-right" style="width: 10%;">
                                    <div class="action-btns d-flex justify-content-end">
                                        <a href="" data-popup="tooltip" title="View Cities" style="margin-right:5px;"
                                            class="mt-2"><i class="fa fa-eye"></i></a>
                                        <a href="" data-popup="tooltip" title="Edit" data-placement="bottom"
                                            class="mt-2" style="margin-right:5px;"><i class="fa fa-edit"></i></a>

                                        <a href="" data-popup="tooltip" title="Edit" data-placement="bottom"
                                            class="mt-2" style="margin-right:5px;"><i class="fa fa-user"></i></a>

                                    </div>
                                </td>
                            </tr>
                            @endforeach


                    </table>



                </div>
            </div>
        </div>
    </div>




</div>
<!------------add notification-------------->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('Add Notification') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle " style="    color: #FF0000;"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerForm" action="{{ route('add.notification') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                            <div class=" form-group select-sup">
                                <label class="title-label">User Type</label>


                                <select class="form-control select " name="usertype" required>
                                    <option value=""></option>
                                    @foreach($users as $user)

                                    <option value="{{$user}}">{{$user}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Heading</label>

                                <input type="text" class="form-control form-control-lg" name="heading">
                            </div>
                        </div>





                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Description</label>

                                <input type="text" class="form-control form-control-lg" name="description"
                                    style="height: 100px!important;">
                            </div>
                        </div>


                    </div>

                    <div class="form-group row ">
                        <div class="col text-center ">
                            <button type="submit" class="btn gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
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
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
