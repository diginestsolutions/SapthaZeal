<style>
    body {
     font-family: 'Poppins' !important;
    }

    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
    .btn-color {
        background: transparent linear-gradient(180deg, #0070BA 0%, #0D0D80 100%) 0% 0% no-repeat padding-box;
        border-radius: 9px;
        opacity: 1;
        color: #fff !important;

    }

    .container-fluid {
        background-image: url('../jobprovider/assets/fluid.png');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;


    }
    .iti__country-list {
        width:366px !important;
    }

    @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
        h3 {
            font-family: 'Quicksand' !important;
            font-weight: 600 !important;
            letter-spacing: 1px;
            color: #000000;
            opacity: 1;
            font-size: 32px !important;
            text-transform: uppercase;

        }

    .form-control {
        background-color: #F3E5F5;
        border-radius: 50px !important;
        padding: 12px 15px 12px 15px !important;
        width: 100%;
        box-sizing: border-box;
        border: none !important;
        z-index: 1;
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
        position: absolute;
        top: 0px;
        z-index: 999;

    }

    .icons {
        top: 0;
    }

    .group {
        background-image: url('../jobprovider/assets/card.png');
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 25px !important;

    }

    .img-fluid {
        margin-top: 85px;
        height: 400px !important;
        width: 504px;
    }

   
    .heading {

        font-family: 'Poppins' !important;
        font-size: 20px !important;
        font-weight: 900 !important;
        color: #0072BB;
    }

    .form-control1 {
        width: 125% !important;
        height: 46px !important;
    }

</style>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet"
        href="//mojoaxel.github.io/bootstrap-select-country/dist/css/bootstrap-select-country.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
</head>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <img src="../jobprovider/assets/Group 23.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="card group my-5 col-md-12 col-lg-6 col-xl-4">
                <form class="card-body ">
                    <div class="text-center">
                        <img src="../../jobprovider/assets/logo.png" alt="Sample image"
                            class=" profile-image-pic   my-3" width="200px" alt="profile">
                    </div>
                    <h3 class="mb-5 text-center heading" style="">LOG IN</h3>
                    <div class="mb-3">
                        <input type="tel" id="txtPhone" class="txtbox form-control form-control1" />
                        <input id="btnSubmit" class="btn" type="button">
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100"><span
                                class="login">LOG IN</span></button></div>
                    <div id="emailHelp" class="form-text text-center mb-5 ">
                        Don't have a account yet?<a href="#" class="text-blue font-weight-bold"> Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
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
            var code = $("#txtPhone").intlTelInput("getSelectedCountryData").dialCode;
            var phoneNumber = $('#txtPhone').val();
            var name = $("#txtPhone").intlTelInput("getSelectedCountryData").name;
            alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' +
                name);
        });
    });

</script>
