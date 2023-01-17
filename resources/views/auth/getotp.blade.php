<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }

    .h-custom {
        height: calc(100% - 73px);

    }

    .container-fluid {
        background-image: url('../Assets/Login.png');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }

        img {
            height: 200px;
            width: auto;
        }

        h3 {
            font: normal normal 200 20px/31px Quicksand;
            letter-spacing: 1.25px;
            color: black;
            text-transform: uppercase;
            opacity: 1;
        }

        .form-control {
            background-color: #F3E5F5;
            border-radius: 50px !important;
            padding: 12px 15px 12px 15px !important;
            width: 100%;
            box-sizing: border-box;
            border: none !important;
            border: 1px solid #F3E5F5 !important;
            font-size: 16px !important;
            color: #000 !important;
            font-weight: 400;
        }

        .img-responsive {
            margin: 0 auto;
        }

        .gradient-button-1 {
            background-image: linear-gradient(to right, #DD5E89 0%, #F7BB97 51%, #DD5E89 100%)
        }
    }

    .icon {
        padding: 6px;
        background: #208CD1;
        color: white;
        min-width: 36px;
        text-align: center;
        border-radius: 13px;
    }

    .icons {
        margin-right: -37px;
    }

    .img-fluid {
        margin-top: 25px;

    }

    h6 {
        font: normal normal medium 18px/30px Quicksand;
        letter-spacing: 0.72px;
        color: #262626;
        opacity: 1;
    }

    .inputs input {
        width: 40px;
        height: 40px
    }

    small {
        font: normal normal medium 18px/30px Quicksand;
        letter-spacing: 0.72px;
        color: #0370B6;
        opacity: 1;
    }

</style>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
</head>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 col-lg-6 col-xl-5">
                <img src="../Assets/Untitled-2.png" class="img-fluid" style="width: 500px;" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <div class="col-12 mx-auto d-flex justify-content-center flex-wrap">
                    <div class="col-md-6 col-lg-6 col-xl-5">
                        <img src="../Assets/logo.png" class="img-fluid" alt="Sample image">
                    </div>



                </div>
                <form>
                    <h3 class="mb-5 text-center heading" style="">OTP</h3>

                    <div class="form-row justify-content-center">
                        <h6>A 4 digit One Time Password has been <br> sent to your registered phone number</h6>
                        <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                            <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" />
                            <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" />
                            <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" />
                            <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" />

                        </div>

                    </div>
                    <div class=" text-center">
                        <small>

                            <a href="#" class="text-decoration-none ">RESEND OTP?</a>
                        </small>
                    </div>



                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="button" class="btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
letter-spacing: 0.75px;
border:none;
color: #FFFFFF;

opacity: 1;
background-image: linear-gradient(to right,  #69DB65 51%, #208CD1 100%);
width: 100px;
;">Confirm</button>

                    </div>

                </form>
            </div>
        </div>
    </div>

</section>
