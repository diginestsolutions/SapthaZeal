@extends('layouts.jobprovider.app')
@section('content')
<style>
    body {
        text-decoration: none;
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
        color: #01325A;
        pointer-events: none;
    }

    .upload-icon {
        height: 50px;
        z-index: 1;
        position: relative;
        float: left;
        margin-left: 66px;
        margin-top: -50px;
    }

    input::-webkit-datetime-edit {
        color: transparent;
    }

    input:focus::-webkit-datetime-edit {
        color: #000;
    }

    input[type="date"]::-webkit-calendar-picker-indicator {
        cursor: pointer;
        border-radius: 4px;
        filter: invert(1) sepia(100%) saturate(100000%) hue-rotate(170deg);
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
    .bt:focus {
        outline: none;
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
    <h3 class="  heading" style=""> <a class="btn mr-2 " href="{{ route('jobprovider.job') }}"><span class="icon2"><button
                    class="btn-back bt" style="border-radius:50%;
            border:none; background-color:#4CB848; padding:10px;"><span class="left" style="color:white"><i
                            class="fa-solid fa-chevron-left"></i></span></button></i></a>Add Job</h3>
    <form action="{{ route('jobprovider.job.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-9 ml-5">

            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group select-sub">
                        <label class="title-label">Job Category</label>
                        <select name="category" class="form-control" placeholder="select" id="country">
                            <option value="Boosted" class="text-capitalize">Boosted</option>
                            <option value="medicalfield" class="text-capitalize">Normal</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                    <div class=" form-group">
                        <label class="title-label">Job name</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Job Name" name="name"
                            value="" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 ">
                    <div class=" form-group">
                        <label class="title-label">Job Description</label>
                        <textarea rows="4" class="form-control" name="description" placeholder="Job Description"></textarea>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                    <div class=" form-group">
                        <label class="title-label">Prefered Skills</label>
                        <input type="text" rows="4" name="skill" id="skill" class="form-control"
                                        style=" height: 100px;" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                <div class="col-lg-10">
                        <div class="form-group ">
                            <label class="title-label" style="margin-right:42px;">Experience Required</label>
                            <div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
                                <input type="number" class="form-control " id="datepicker" placeholder="Min"
                                    name="years" style="text-align: right;">
                            </div>
                            <div class="col-xl-6 col-lg-5 col-md-4 col-sm-12">
                                <input type="number" name="months" class="form-control  " placeholder="Max" required
                                    style="text-align: right;" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                    <div class=" form-group">
                        <label class="title-label">Salary</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Salary" name="salary" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 ">
                    <div class=" form-group">
                        <label class="title-label">Job Location</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Job Location"
                            name="job_location" required>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                    <div class=" form-group select-date">
                        <label class="title-label">Expiry date</label>
                        <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="deadline"
                            class="form-control form-control-lg" placeholder=" Expiry Date" name="expirydate" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12 ">
                    <div class=" form-group">
                        <label class="title-label">Job Opening</label>
                        <input type="number" class="form-control form-control-lg" placeholder="Job Opening"
                            name="opening" required>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing  text-center">
                <div class="text-center"><button type="submit" class="btn btn-color1 px-5 "><span
                            class="login">Add</span></button>
                </div>
            </div>
        </div>
    </form>
</body>
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
@endsection
