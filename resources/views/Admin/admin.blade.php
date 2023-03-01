@extends('layouts.Dashboard')

@section('content')
<style>
    .fa-times-circle {
        color: #FF0000;
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

    #mymodal {
        border-radius: 15px;
    }

    .form-control[readonly] {
        background-color: #fff !important;
        opacity: 1;
    }

    .dropzone1 {
        width: 100px;
        height: 80px;
        border: 1px dashed #999;
        border-radius: 3px;
        text-align: center;
    }

    .upload-icon1 {
        margin: -41px 2px 2px 2px;
        background-color: #208CD1;
        border-radius: 5px;
    }

    .upload-input1 {
        position: relative;
        top: -62px;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
    }


    .form-control {
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;
        height: 40px !important;
        font-size: 14px;
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
                        class="user-avatar  pull-right" style="width:44px;      height: 44px;   border-radius: 28%;"
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

        <a class="" href="" data-toggle="modal" data-target="#registerModal"> <span class="icons"> <i
                    class="fa fa-plus " aria-hidden="true"></i></span></a>
    </nav>
    <br />
    <!--Table-->
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
    <div class=" col-md-12 ">
        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-resp-noscroll" id="dt-vertical-scroll">
                        <thead>
                            <tr>
                                <th style="width:10%">User ID</th>
                                <th style="width:15%">Created Date</th>
                                <th> Name</th>
                                <th>Email Address</th>
                                <th style="width:16%">Mobile Number</th>
                                <th>Last Login</th>
                                <th style="width:16%">Approval Status</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>

                                <td>#{{$user->user_id}}</td>
                                <td>{{$user->created_at->format('d-m-Y')}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->last_login_in}}</td>


                                <input type="hidden" id="user_id_{{$user->user_id}}" value="{{ $user->id }}" />

                                @if($user->status =='Saved')
                                <td class="text-center">
                                    <div class="action-btns d-flex ">

                                        <a href="javascript:void(0)" data-popup="tooltip" title="View Cities"
                                            style="margin-right:5px;" class="mt-2"><i class="fa-solid fa-circle-check"
                                                style="font-size:25px;color:#7ECD7C"
                                                onclick="return statusapproved({{$user->user_id}});"></i></a>
                                        <a href="javascript:void(0)" data-popup="tooltip" title="Edit"
                                            data-placement="bottom" class="mt-2"><i class="fa fa-times-circle"
                                                style="font-size:25px;color:#C15A5A"
                                                onclick="return statusrejected({{$user->user_id}});"></i></a>

                                    </div>
                                </td>
                                @endif
                                @if($user->status =='Active')
                                <td style="color:#48BA48">
                                    Approved
                                </td>
                                @endif
                                @if($user->status =='Inactive')
                                <td style="color:red">
                                    Rejected
                                </td>
                                @endif


                                <td>

                                    <div class="action-btns d-flex ">
                                        <a href="javascript:void()" onclick="return showitem({{$user->user_id}});"
                                            data-popup="tooltip" title="View" data-toggle="modal"
                                            style="margin-right:5px;" class="mt-2"><i class="fa fa-eye"></i></a>
                                        <a href="javascript:void()" onclick="return edititem({{$user->user_id}});"
                                            data-popup="tooltip" title="Edit" data-placement="bottom"
                                            data-toggle="modal" class="mt-2" style="margin-right:5px;"><i
                                                class="fa fa-edit"></i></a>

                                        <input type="hidden" id="user_id" value="{{ $user->id }}" />

                                        <input type="hidden" id="user_id_{{$user->user_id}}" value="{{ $user->id }}" />

                                        <a href="javascript:void()" onclick="return deleteitem({{$user->user_id}});"
                                            data-popup="tooltip" data-placement="bottom" class="mt-2" title="Delete"><i
                                                class="fa fa-trash"></i></a>

                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

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
                <button type="button" class="close" onclick="return reset();" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" action="{{ route('register.admin') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label"> Name</label>

                                <input type="text" class="form-control form-control-lg" name="name" required>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12" id="demo">

                            <div class=" form-group">
                                <label class="title-label"> Image</label><br />
                                <button class="btn fileicon " type="button">
                                    <div class="dropzone1">
                                        <img id="preview" style="height: 78px;width: 98px;">
                                        <img src="../Assets/cloud-computing.png" class="upload-icon1" />
                                        <input type="file" class="upload-input1" name="image" id="image" />

                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Email Address</label>

                                <input type="email" class="form-control form-control-lg" name="email" required>



                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label">Mobile Number</label>

                                <input type="number" class="form-control form-control-lg" name="phone" required
                                    maxlength=10>


                            </div>
                        </div>



                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Designation</label>

                                <input type="text" class="form-control form-control-lg" name="designation" required>
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

<div class="modal fade" id="showmodal" tabindex="-1" role="dialog" aria-labelledby="showmodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="showmodal">{{ __('View User') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                </button>
            </div>

            <div class="modal-body">
                <form id="registerForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="user_edit_id">
                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label"> Name</label>

                                <input type="text" class="form-control form-control-lg" name="name" id="user_name"
                                    readonly>
                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">





                            <div class=" form-group">
                                <label class="title-label">Image</label>


                                <div>


                                    <img id="uploaded_image" class="" style=" width:70px; height:70px;">

                                </div>



                            </div>
                        </div>


                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Email Address</label>

                                <input type="text" class="form-control form-control-lg" name="email" id="email"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Mobile Number</label>

                                <input type="text" class="form-control form-control-lg" name="phone" id="mobile"
                                    readonly>
                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label">Designation</label>

                                <input type="text" class="form-control form-control-lg" name="designation"
                                    id="designation" readonly>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!---------------edit user--------------->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="editmodal">{{ __('Edit User') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                </button>
            </div>

            <div class="modal-body col-lg-12">
                <form method="POST" enctype="multipart/form-data" action="{{ route('update1.admin')}}">
                    @csrf
                    <input type="hidden" name="id" id="user_edit_id_">
                    <div class="row">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">




                            <div class=" form-group">
                                <label class="title-label"> Name</label>

                                <input type="text" class="form-control form-control-lg" name="name" id="name" required>
                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">





                            <div class=" form-group">
                                <label class="title-label"> Image</label>

                                <input style="display:none" type="file" id="my-file" name="image">
                                <div class="dropzone">
                                    <button class="btn fileicon " type="button"
                                        onclick="document.getElementById('my-file').click()">
                                        <img id="upload_image" style=" width:80px; height:80px;">
                                        <img src="../Assets/cloud-computing.png" class="upload-icon1" />
                                    </button>
                                </div>

                            </div>


                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12" style="margin-top: -57px;">




                            <div class=" form-group">
                                <label class="title-label">Email Address</label>

                                <input type="email" class="form-control form-control-lg" name="email" id="_email"
                                    required>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label">Mobile Number</label>

                                <input type="number" class="form-control form-control-lg" name="phone" id="_mobile"
                                    required maxlength=10>

                            </div>
                        </div>




                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12" style="margin-top: -77px;">




                            <div class=" form-group">
                                <label class="title-label">Designation</label>

                                <input type="text" class="form-control form-control-lg" name="designation"
                                    id="_designation" required>
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
            </div>
            </form>
        </div>
    </div>
</div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
    function deleteitem(id) {
        var id = $(`#user_id_${id}`).val();
        var url = '{{ route("admin.destroy", ":id") }}';
        url = url.replace(':id', id);
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel pls!",
                closeOnConfirm: true,
                closeOnCancel: true
            },
            function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: '_token={{ csrf_token() }}',
                        success: function (data) {
                            if (data.success == 1) {
                                swal(
                                    'Deleted!',
                                    'Admin has been deleted.',
                                    'success'
                                );
                                $('#row' + id).remove();
                                location.reload();
                            } else {
                                swal(
                                    'Failed!',
                                    data.message,
                                    'error'
                                );
                            }
                        },
                        error: function (data) {

                            swal(
                                'Failed!',
                                data.message,
                                'error'
                            );
                        }

                    });
                } else {
                    swal("Cancelled", "Admin is safe :)", "error");
                }
            });
    }

</script>

<script>
    function showitem(id) {

        var id = $(`#user_id_${id}`).val();

        var url = '{{ route("show.admin", ":id") }}';
        url = url.replace(':id', id);

        if (id) {
            $.ajax({
                type: 'get',
                url: url,
                success: function (data) {
                    if (data.success == 1) {
                        $('#user_edit_id').val(data.data._id);
                        $('#user_name').val(data.data.name);
                        $('#uploaded_image').attr('src', data.data.image).show();
                        $('#email').val(data.data.email);
                        $('#mobile').val(data.data.phone);
                        $('#designation').val(data.data.designation);
                        $('#showmodal').modal('show');
                    }

                }
            })
        }
    }

</script>
<script>
    function edititem(id) {

        var id = $(`#user_id_${id}`).val();

        var url = '{{ route("edit.admin", ":id") }}';
        url = url.replace(':id', id);


        if (id) {
            $.ajax({
                type: 'get',
                url: url,
                success: function (data) {
                    if (data.success == 1) {
                        $('#user_edit_id_').val(data.data._id);
                        $('#name').val(data.data.name);
                        $('#upload_image').attr('src', data.data.image).show();
                        $('#_email').val(data.data.email);
                        $('#_mobile').val(data.data.phone);
                        $('#_designation').val(data.data.designation);

                        $('#editmodal').modal('show');
                    }

                }
            })
        }
    }

</script>
<script type="text/javascript">
    $(document).ready(function (e) {


        $('#image').change(function () {

            let reader = new FileReader();

            reader.onload = (e) => {

                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

    });

</script>
<script>
    function statusapproved(id) {

        var id = $(`#user_id_${id}`).val();
        var url = '{{ route("user.approved", ":id") }}';
        url = url.replace(':id', id);
        console.log(id);
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
            function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: '_token={{ csrf_token() }}',
                        success: function (data) {
                            if (data.success == 1) {
                                swal(
                                    'Changed!',
                                    'User has been approved.',
                                    'success'
                                );
                                $('#row' + id).remove();
                                location.reload();
                            } else {
                                swal(
                                    'Failed!',
                                    data.message,
                                    'error'
                                );
                            }
                        },
                        error: function (data) {
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

    function statusrejected(id) {
        var id = $(`#user_id_${id}`).val();
        var url = '{{ route("user.rejected", ":id") }}';
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
            function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: '_token={{ csrf_token() }}',
                        success: function (data) {
                            if (data.success == 1) {
                                swal(
                                    'changed!',
                                    'Status has been rejected.',
                                    'success'
                                );
                                $('#row' + id).remove();
                                location.reload();
                            } else {
                                swal(
                                    'Failed!',
                                    data.message,
                                    'error'
                                );
                            }
                        },
                        error: function (data) {
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
<script>
    function reset() {
        $("#form").trigger('reset');
    }

</script>
<script type="text/javascript">
    $(document).ready(function (e) {


        $('.image').change(function () {

            let reader = new FileReader();

            reader.onload = (e) => {

                $('.preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);

        });

    });

</script>

@endsection
