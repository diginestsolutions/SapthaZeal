@extends('layouts.Dashboard')
@section('content')
<style>
    .fa-times-circle {
        color: #FF0000;
    }

    #mymodal {
        border-radius: 15px;
    }

    .form-control {
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;
        height: 40px !important;
        font-size: 15px;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 26px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #FFCDDD;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 19px;
        width: 18px;
        left: 4px;
        bottom: 4px;
        background-color: #42E927;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #B0FFA3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
        background-color: white;
    }

    .slider.round:after {

        background-color: red;
    }


    .frame {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        height: 400px;
        margin-top: -200px;
        margin-left: -200px;
        border-radius: 2px;
        box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background: linear-gradient(to top right, darkmagenta 0%, hotpink 100%);
        color: #333;
        font-family: "Open Sans", Helvetica, sans-serif;
    }

    .center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        height: 260px;
        border-radius: 3px;
        box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
    }

    .title {
        width: 100%;
        height: 50px;
        border-bottom: 1px solid #999;
        text-align: center;
    }

    h1 {
        font-size: 16px;
        font-weight: 300;
        color: #666;
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
        padding-left: 28px;
    }

</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="col-lg-10  col-md-12" id="main">

    <nav class="navbar navbar-light col-md-12 ">

        <h3 class=" mt-3  heading" style=""> Admin Management</h3>


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
    {{-- Message --}}
    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success !</strong> {{ session('success') }}
    </div>
    @endif


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
                                <th>UserID</th>
                                <th style="width:14%">Created Date</th>
                                <th> Name</th>
                                <th>Email Address</th>
                                <th>Mobile</th>
                                <th>Last Login</th>
                                <th style="width:15%">Approval Status</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        @foreach ($users as $user)
                        <tbody>

                            <tr>
                                <td>#{{$user->user_id}}</td>
                                <td>{{$user->created_at->format('d-m-Y')}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->updated_at}}</td>

                                <td class="">
                                    <div class="switch-wrapper">
                                        <label class="switch s-icons s-outline  s-outline-default">
                                            <input class="action-switch_1 toggle-class" type="checkbox"
                                                data-id={{$user->id}} {{ $user->status ? 'checked' : '' }}>
                                            <span class="slider round" data-popup="tooltip"
                                                title="Click to Active"></span>
                                        </label>
                                    </div>
                                </td>

                                <td class="text-right" style="width: 10%;">
                                    <div class="action-btns d-flex justify-content-end">
                                        <a href="" data-popup="tooltip" title="View Cities" data-toggle="modal"
                                            data-target="#editModal{{$user->id}}" style="margin-right:5px;"
                                            class="mt-2"><i class="fa fa-eye"></i></a>
                                        <a href="" data-popup="tooltip" title="Edit" data-placement="bottom"
                                            data-target="#updateModal{{$user->id}}" data-toggle="modal" class="mt-2"
                                            style="margin-right:5px;"><i class="fa fa-edit"></i></a>


                                        <a href=" {{ route('Admin.delete', $user->id)}}" data-popup="tooltip" data-placement="bottom" class="mt-2"><i
                                                class="fa fa-trash"></i></a>

                                    </div>
                                </td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>




</div>
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('Add User') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerForm" action="{{ route('register.admin') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label"> Name</label>

                                <input type="text" class="form-control form-control-lg" name="name">
                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12" id="demo">




                            <div class=" form-group">
                                <label class="title-label"> image</label>



                                <button class="btn fileicon " type="button">
                                    <div class="dropzone1">
                                        <img src="../assets/cloud-computing.png" class="upload-icon" />
                                        <input type="file" class="upload-input1" name="image" />
                                    </div>
                                </button>



                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Email Address</label>

                                <input type="text" class="form-control form-control-lg" name="email">
                            </div>
                        </div>





                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Mobile Number</label>

                                <input type="text" class="form-control form-control-lg" name="phone">
                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Designation</label>

                                <input type="text" class="form-control form-control-lg" name="designation">
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
<!---------------view user--------------->
@foreach ($users as $user)
<div class="modal fade" id="editModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="registerModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('View User') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerForm" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label"> Name</label>

                                <input type="text" class="form-control form-control-lg" name="name"
                                    value="{{$user->name}}">
                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">





                            <div class=" form-group">
                                <label class="title-label"> image</label>



                                <button class="btn fileicon " type="button">
                                    <div class="">
                                        <img src="{{ $user->image}}" class="" style=" width:100px; height:100px;" />

                                    </div>
                                </button>



                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Email Address</label>

                                <input type="text" class="form-control form-control-lg" name="email"
                                    value="{{$user->email}}">
                            </div>
                        </div>





                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Mobile Number</label>

                                <input type="text" class="form-control form-control-lg" name="phone"
                                    value="{{$user->phone}}">
                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Designation</label>

                                <input type="text" class="form-control form-control-lg" name="designation"
                                    value="{{$user->designation}}">
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


<!---------------edit user--------------->
@foreach ($users as $user)
<div class="modal fade" id="updateModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('Edit User') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerForm" action="{{ route('update1.admin',$user->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label"> Name</label>

                                <input type="text" class="form-control form-control-lg" name="name"
                                    value="{{$user->name}}">
                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">





                            <div class=" form-group">
                                <label class="title-label"> image</label>





                                <input style="display:none" type="file" id="my-file" name="image">

                                <div class="dropzone">

                                    <button class="btn fileicon " type="button"
                                        onclick="document.getElementById('my-file').click()">
                                        <img src="{{$user->image}} " width="100" height="100" alt=""
                                            style="border-radius:10px;">

                                        <img src="../assets/Group 22.png" class="upload-icon" />



                                </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Email Address</label>

                                <input type="text" class="form-control form-control-lg" name="email"
                                    value="{{$user->email}}">
                            </div>
                        </div>





                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Mobile Number</label>

                                <input type="text" class="form-control form-control-lg" name="phone"
                                    value="{{$user->phone}}">
                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Designation</label>

                                <input type="text" class="form-control form-control-lg" name="designation"
                                    value="{{$user->designation}}">
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
@endforeach
@endsection




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script>
    $(function () {
        $('.toggle-class').change(function () {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var user_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '../admin/changeStatus',
                data: {
                    'status': status,
                    'user_id': user_id
                },
                success: function (data) {
                    console.log(data.success)
                }
            });
        })
    })

</script>
