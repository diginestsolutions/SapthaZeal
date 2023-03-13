<!--<style>
    body {
     font-family: 'Poppins' !important;
    }
    .container-fluid {
        background-image: url('../Assets/jobprovider/fluid.png');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
    }
</style>
<!DOCTYPE html>
<html>
<head>
    <meta name = "description" content = "">
    <meta name = "author" content = "">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/jobprovider/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet"
        href="//mojoaxel.github.io/bootstrap-select-country/dist/css/bootstrap-select-country.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
</head>
<body>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <img src="../Assets/jobprovider/Group 23.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="card group my-5 col-md-12 col-lg-6 col-xl-4">
                <form class="card-body" action="{{ route('jobprovider.generateotp') }}" method="post">
                    {{ csrf_field() }} 
                    <div class="text-center">
                        <img src="../../Assets/jobprovider/logo.png" alt="Sample image"
                            class=" profile-image-pic   my-3" width="200px" alt="profile">
                    </div>
                    <h3 class="mb-5 text-center heading" style="">LOG IN</h3>
                    <div class="mb-3">
                       <input type="number" name="country_code" placeholder="Country Code" class="form-control form-control1" >
                        <input type="number" name="mobile" placeholder="Mobile" class="form-control form-control1" >
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-color px-5 w-100"><span
                                class="login">LOG IN</span></button></div>
                    <div id="emailHelp" class="form-text text-center mb-5 ">
                        Don't have a account yet?<a href="#" class="text-blue font-weight-bold"> Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#mobile_code").intlTelInput({
  initialCountry: "in",
  separateDialCode: true
  // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
});

    });

</script>-->
<style>
    body {
     font-family: 'Poppins' !important;
    }
    .container-fluid {
        background-image: url('../Assets/jobprovider/fluid.png');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
    }
</style>
<!DOCTYPE html>
<html>
<head>
    <meta name = "description" content = "">
    <meta name = "author" content = "">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/jobprovider/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet"
        href="//mojoaxel.github.io/bootstrap-select-country/dist/css/bootstrap-select-country.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
</head>
<body>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <img src="../Assets/jobprovider/Group 23.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="card group my-5 col-md-12 col-lg-6 col-xl-4">
                <form class="card-body ">
                    <div class="text-center">
                        <img src="../../Assets/jobprovider/logo.png" alt="Sample image"
                            class=" profile-image-pic   my-3" width="200px" alt="profile">
                    </div>
                    <h3 class="text-center heading" style="">LOG IN</h3>
                    <form method="POST" action="#">
                        @csrf
                    <div class="mb-3">
                        <input type="text" id="txtPhone" class="txtbox form-control form-control1" />
                       
                    </div>
                    <div class="text-center"><button type="button"  id="btnSubmit"  class="btn btn-color px-5 w-100"><span
                                class="login">LOG IN</span></button></div>
                    <div id="emailHelp" class="form-text text-center mb-5 ">
                        Don't have a account yet?<a href="#" class="text-blue font-weight-bold"> Sign up</a>
                    </div>
                    <div class="alert alert-danger" id="err" style="display: none"><label for="myalue1"></label></div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        var code = "+91"; // Assigning value from model.
        $('#txtPhone').val(code);
        $('#txtPhone').intlTelInput({
            autoHideDialCode: true,
            autoPlaceholder: "ON",
            dropdownContainer: document.body,
            formatOnDisplay: true,
            hiddenInput: "full_number",
            initialCountry: "auto",
            nationalMode: true,
            placeholderNumberType: "MOBILE",
            preferredCountries: ['US'],
            separateDialCode: true
        });
        $('#btnSubmit').on('click', function () {
            err.style.display = "none";
            var code = $("#txtPhone").intlTelInput("getSelectedCountryData").dialCode;
            var phoneNumber = $('#txtPhone').val();
            var name = $("#txtPhone").intlTelInput("getSelectedCountryData").name;
            var url = '{{ route("jobprovider.generateotp") }}';
            var token = "{{ csrf_token() }}";
            var error = 0;
            if(phoneNumber == '')
            {
                jQuery("label[for='myalue1']").html("Phone number is required");
                err.style.display = "block";
                error++;
            }
            if(error == 0) {
                $.ajax({
                    type:'POST',
                    url:url,
                    dataType: 'json',  
                    data: { code: code,mobile: phoneNumber,_token: token },
                    success:function(data) {
                        if(data.success==1)
                        {
                            window.location = window.location.origin+'/jobprovider/otp?mobile=' + data.mobile;
                        }
                        else
                        {
                            jQuery("label[for='myalue1']").html(data.message);
                            err.style.display = "block";
                        }
                    },error:function(data) {
                        errorsHtml = '<div class="alert alert-danger"><ul>';
                        $.each( data.responseJSON.errors, function( key, value ) {
                            console.log(value[0]);
                            errorsHtml += '<li>'+ value[0] + '</li>'; 
                        });
                        errorsHtml += '</ul></div>';
                        $('#form-errors').html( errorsHtml );
                    }
                });
            }
        });
    });

</script>
