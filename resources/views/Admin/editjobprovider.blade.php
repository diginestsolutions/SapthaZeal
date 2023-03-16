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
        background-image: url('../../../Assets/1.png');
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
padding-left: 50px !important;
}
.select-sup::after {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 26px;
    content: "\f13a";
    position: absolute;
    right: -7px;
    bottom: 20px;
    padding: 0 1em;
    color: #7ECD7C;
    pointer-events: none;
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

              
    <div class=" col-lg-12 text-center">
                    <img src="../../../Assets/logo.png" class="img-fluid " width="150" alt="Sample image">
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
                <img src="../../../Assets/logo.png" class="img-fluid" alt="Sample image">
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

                <h3 class=" mt-3  heading"> <a class="btn " href="{{ route('view.jobprovider') }}"><span
                            class="icon2"><button class="btn-back" style="border-radius:50px;
            border:none;"><span class="left"><i class="fa-solid fa-chevron-left"></i></span></button></i></a>Edit Job
                    Provider  #{{$provider->jobprovider_id}}
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




            <div class=" col-md-12 mt-4 ">
                <div class=" widget-content ">
                    <form  action="{{ route('update.jobprovider', $provider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <div class="row col-lg-12">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label"> Name</label>

                                    <input type="text" class="form-control form-control-lg" name="name" value="{{$provider->name}}" required>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label">Official Email Address</label>

                                    <input type="text" class="form-control form-control-lg" name="email" value="{{$provider->email}}" required>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label">Mobile Number</label>

                                    <input type="text" class="form-control form-control-lg" name="mobile" value="{{$provider->mobile}}" required>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label">Designation</label>

                                    <input type="text" class="form-control form-control-lg" name="designation" value="{{$provider->designation}}">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">




                                <div class=" form-group">
                                    <label class="title-label">Company Name</label>

                                    <input type="text" class="form-control form-control-lg" name="company_name" value="{{$provider->company_name}}" required>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">






                                <div class=" form-group select-sup">


                                    <label class="title-label">Job Industry</label>

                                    <select class="form-control select " name="jobindustry" required>
                                    <option value=""></option>
                                        @foreach($items as $item)
                                        <option value="{{$item->name}}" {{$provider->jobindustry ==$item->name ? 'selected' : ''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">






                                <div class=" form-group">


                                    <label class="title-label">Address</label>

                                    <input type="text" class="form-control form-control-lg" name="address" value="{{$provider->address}}">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <input type="hidden" value="{{$provider->subscriptionplan}}" id="subscription_id">
                                <input type="hidden" value="{{$provider->duration}}" id="duration_id">
                                <div class=" form-group select-sup">
                                    <label class="title-label">Subscription Plan</label>

                                    <select class="form-control select " name="subscriptionplan" id="plan" required>
                                    <option value=""></option>
                                        @foreach($subs as $sub)
                                        <option value="{{$sub->id}}" {{$provider->subscriptionplan == $sub->id ? 'selected' : ''}}>{{$sub->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class=" form-group select-sup">
                                    <label class="title-label">Duration<span style="color: red;">*</span></label>

                                    <select class="form-control select " id="subplan" name="duration" required>


                                        <option value="">Choose Duration</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class=" form-group select-sup">
                                    <label class="title-label">Payment Status</label>

                                    <select class="form-control select " name="payment_status" required>

                                    <option value="0" class="text-capitalize">
                                            </option>
                                            <option value="paid" class="text-capitalize" {{$provider->payment_status == "paid" ? 'selected' : ''}}>
                                                paid
                                            </option>
                                            
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" id="providers_id" value="{{ $provider->id }}"/>
                            @if($provider->status =='Saved')  
                            <div class="col-xl- col-lg-4 col-md-4 col-sm-12">
                                <div class=" form-group">
                                    <label class="title-label">Approved Status</label><br/>
                                    <a href="javascript:void(0)" data-popup="tooltip" title="View Cities" style="margin-right:5px;"
                                            class="mt-2"><i class="fa-solid fa-circle-check"
                                                style="font-size:25px;color:#7ECD7C" onclick="return statusapproved({{$provider->id}});"></i></a>
                                    <a href="javascript:void(0)" data-popup="tooltip" title="Edit" data-placement="bottom"
                                            class="mt-2" style="margin-right:5px;"><i class="fa fa-times-circle"
                                                style="font-size:25px;color:#C15A5A" onclick="return statusrejected({{$provider->id}});"></i></a>
                               
                                </div>
                            </div>
                            @else
                            <div class="col-xl- col-lg-4 col-md-4 col-sm-12">
                                <div class=" form-group"><div class="switch-wrapper">
                                    <label class="title-label">Active Status</label><br/>
                                    <label class="switch s-icons s-outline  s-outline-default">
                                            <input class="action-switch_1 toggle-class" type="checkbox"
                                                data-id={{$provider->id}} {{ $provider->status == "Active" ? 'checked' : '' }}>
                                            <span class="slider round" data-popup="tooltip"
                                                title="Click to Active"></span>
                                    </label>  </div>
                                </div>
                            </div>
                            @endif

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>   
<script type="text/javascript">
    $(document).ready(function () {
        $('#plan').change(function () {
            var id = $(this).val();
            $('#subplan').find('option').not(':first').remove();
            $.ajax({
                url: 'category/' + id,
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    var period = response.data.period;
                    var option = '';
                    for (var i = 0; i < period.length; i++) {
                       option += '<option value="' + period[i] + '">' + period[i] +
                                        '</option>';
                    }
                    $("#subplan").append(option);
                }
            })
        });
    });
    $(document).ready(function () {
        var id = $('#subscription_id').val();
        var duration_id = $('#duration_id').val();
        if(id)
        {
            $('#subplan').find('option').not(':first').remove();
            var url = '{{ route("categories", ":id") }}';
            url = url.replace(':id', id);
            $.ajax({
                url: url,
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    var period = response.data.period;
                    var option = '';
                    for (var i = 0; i < period.length; i++) {
                        if(duration_id == period[i]) {
                            option += '<option value="' + period[i] + '" selected>' + period[i] +
                                        '</option>';
                        }else {
                            option += '<option value="' + period[i] + '">' + period[i] +
                                        '</option>';
                        }
                    }
                    $("#subplan").append(option);
                }
            })
        }
    });
    $(function () {
        $('.toggle-class').change(function () {
            var status = $(this).prop('checked') == true ? 1 : 0;
          
            if(status == 1)
                statusapproved();
            else
                statusrejected();
        })
    })
    function statusapproved()
    {
        var id = $('#providers_id').val();
        var url = '{{ route("jobprovider.approvde", ":id") }}';
        url = url.replace(':id', id);
        swal({
                title: "Are you sure?",
                //text: "You will not be able to recover this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Approved it!",
                cancelButtonText: "No, cancel pls!",
                closeOnConfirm: true,
                closeOnCancel: true
              },
              function(isConfirm) {
                if (isConfirm) {
                   $.ajax({
                            type:'POST',
                            url:url,
                            data:'_token={{ csrf_token() }}',
                            success:function(data){
                              if(data.success==1)
                              {
                                   swal(
                                        'Deleted!',
                                        'Job provider has been approved.',
                                        'success'
                                      );
                                      $('#row'+id).remove();
                                      location.reload();
                              }
                              else
                              {
                                  swal(
                                        'Failed!',
                                        data.message,
                                        'error'
                                      );
                              }
                            },
                            error:function(data)
                            {
                                console.log(data);
                                swal(
                                        'Failed!',
                                        data.message,
                                        'error'
                                      );
                            }
                            
                         });
                }
            });
    }
    function statusrejected()
    {
        var id = $('#providers_id').val();
        var url = '{{ route("jobprovider.rejected", ":id") }}';
        url = url.replace(':id', id);
        swal({
                title: "Are you sure?",
                //text: "You will not be able to recover this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Rejected it!",
                cancelButtonText: "No, cancel pls!",
                closeOnConfirm: true,
                closeOnCancel: true
              },
              function(isConfirm) {
                if (isConfirm) {
                   $.ajax({
                            type:'POST',
                            url:url,
                            data:'_token={{ csrf_token() }}',
                            success:function(data){
                              if(data.success==1)
                              {
                                   swal(
                                        'Deleted!',
                                        'Job provider has been rejected.',
                                        'success'
                                      );
                                      $('#row'+id).remove();
                                      location.reload();
                              }
                              else
                              {
                                  swal(
                                        'Failed!',
                                        data.message,
                                        'error'
                                      );
                              }
                            },
                            error:function(data)
                            {
                                console.log(data);
                                swal(
                                        'Failed!',
                                        data.message,
                                        'error'
                                      );
                            }
                            
                         });
                }
            });
    }
</script>
