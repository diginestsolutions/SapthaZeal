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
    small{
        margin-left: 118px;
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
                    <h3 class="mb-5 text-center heading" style="">OTP</h3>
                    <div class="form-row col-md-12 justify-content-center">
                        <h6 class="content">A 4 digit one time password has been <br> sent to your registered phone
                            number</h6>
                        <div id="otp" class="inputs  col-md-12 d-flex flex-row justify-content-center">
                            <input class="m-2 text-center form-control rounded" type="text" placeholder="*" name="otp[]"
                                id='ist' onkeyup="clickEvent(this,'sec')" onkeypress='return restrictAlphabets(event)'
                                maxlength=1 required />
                            <input class="m-2 text-center form-control rounded" type="text" placeholder="*" name="otp[]"
                                id="sec" onkeyup="clickEvent(this,'third')" onkeypress='return restrictAlphabets(event)'
                                maxlength=1 />
                            <input class="m-2 text-center form-control rounded" type="text" placeholder="*" name="otp[]"
                                id="third" onkeyup="clickEvent(this,'fourth')"
                                onkeypress='return restrictAlphabets(event)' maxlength=1 />
                            <input class="m-2 text-center form-control rounded" type="text" placeholder="*" name="otp[]"
                                id="fourth" maxlength=1 onkeypress='return restrictAlphabets(event)' />
                        </div>
                    </div>
                    <div class=" text-center">
                        <small>
                            <a href="#" class="text-decoration-none ">RESEND OTP?</a>
                        </small>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 "
                            style="width:250px;"><span class="login">CONFIRM</span></button></div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    function clickEvent(first, last) {
        if (first.value.length) {
            document.getElementById(last).focus();
        }
    }

    function restrictAlphabets(e) {
        var x = e.which || e.keycode;
        if ((x >= 48 && x <= 57))
            return true;
        else
            return false;
    }

</script>
