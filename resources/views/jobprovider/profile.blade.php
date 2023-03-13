@extends('layouts.jobprovider.app')
@section('content')
<style>
    body {
        text-decoration: none;
    }

    .upload-icon {
        height: 50px;
        z-index: 1;
        position: relative;
        float: left;
        margin-left: 66px;
        margin-top: -50px;
    }

    .fileicon {
        width: 210px;
    }

    .btn-color1 {
        background: transparent linear-gradient(180deg, #0070BA 0%, #0D0D80 100%) 0% 0% no-repeat padding-box !important;
        border-radius: 5px !important;
        opacity: 1 !important;
        color: #fff !important;
    }

    .select-sub::after {
        font-family: "Font Awesome 5 Free";
        content: '\f078';
        font-weight: 900;
        font-size: 18px;
        position: absolute;
        top: 24px;
        right: 12px;
        bottom: 15px;
        border-radius: 0px 12px 12px 0px;
        padding: 0 1em;
        background-image: linear-gradient(#0263B3, #01325A);
        color: white;

    }

    .gradiennt {

        width: 210px;
        height: 101px;
        padding: 27px;
        padding-top: -24px;
        position: relative;
        background: transparent linear-gradient(180deg, #48D7FF 0%, #0080AE 100%);
        border-radius: 0px 0px 44px 46px;
        opacity: 1;
        right: 25px !important;
        top: 34px;

    }

</style>
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

<body>
    <h3 class="  heading" style=""> Profile</h3>
    <div class="card  " style="border-radius:15px;">
        <div class="card-body ">
            <form class="" action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-3">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <input style="display:none" type="file" id="image" name="image">
                            <div class="dropzone">
                                <button class="btn fileicon " onclick="document.getElementById('image').click()">
                                    <img src="../Assets/jobprovider/images (6).jfif" id="preview" width="200"
                                        height="200" alt="" style="border-radius:10px;">
                                    <img src="../Assets/Group 22.png" class="upload-icon" />
                                    <div class="card-body">
                                        <div>
                                            <h6 class="card-price text-center ">VYSHNAVI RS</h6>
                                            <h6 class="card-price text-center ">HR Manager</h6>
                                        </div>
                                        <div class="d-grid gradiennt text-center">
                                            <h6 class="card-price text-center " style="color:white;">Current Plan</h6>
                                            <h6 class="card-price text-center " style="color:#e3c02d;">Gold</h6>
                                            <h6 class="card-price text-center " style="color:white;">Expiry
                                                Date:23/09/20009</h6>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                <div class=" form-group">
                                    <label class="title-label"> Name</label>
                                    <input type="text" class="form-control form-control-lg" name="name" value=""
                                        required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                <div class=" form-group">
                                    <label class="title-label"> Email Address</label>
                                    <input type="email" class="form-control form-control-lg" name="email" value=""
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 ">
                                <div class=" form-group">
                                    <label class="title-label">Mobile Number</label>
                                    <input type="number" class="form-control form-control-lg" name="phone" value=""
                                        required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                <div class=" form-group">
                                    <label class="title-label">Designation</label>
                                    <input type="text" class="form-control form-control-lg" name="designation" value=""
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group select-sub">
                                    <label class="title-label">Designation</label>
                                    <select name="country" class="form-control  form-control-lg" id="country">
                                        <option value="NG" selected="selected">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="KP">North Korea</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                <div class=" form-group">
                                    <label class="title-label">Designation</label>
                                    <input type="text" class="form-control form-control-lg" name="designation" value=""
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 ">
                                <div class=" form-group">
                                    <label class="title-label">Mobile Number</label>

                                    <input type="number" class="form-control form-control-lg" name="phone" value=""
                                        required>

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                <div class=" form-group">
                                    <label class="title-label">Designation</label>
                                    <input type="text" class="form-control form-control-lg" name="designation" value=""
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group select-sub">
                                    <label class="title-label">Designation</label>
                                    <select name="country" class="form-control  form-control-lg" id="country">
                                        <option value="NG" selected="selected">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="KP">North Korea</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group select-sub">
                                    <label class="title-label">Designation</label>
                                    <select name="country" class="form-control  form-control-lg" id="country">
                                        <option value="NG" selected="selected">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="KP">North Korea</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing  text-center">
                                <div class="text-center"><button type="submit" class="btn btn-color1 px-5 "><span
                                            class="login">Update</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</body>
@endsection
