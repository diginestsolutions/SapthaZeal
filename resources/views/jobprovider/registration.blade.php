<style>
    .card {
        padding: 20px;
        margin: 10px 0 10px;
    }

    body {
        font-family: 'Poppins' !important;
    }

    .container-fluid {
        background-image: url('../Assets/1.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .select-sub::after {
        font-family: "Font Awesome 5 Free";
        content: '\f078';
        font-weight: 900;
        font-size: 28px;
        position: absolute;
        top: 0px;
        right: 13px;
        bottom: 17px;
        border-radius: 0px 12px 12px 0px;
        padding: 0 1em;
        background-color: #0263B3;
        color: white;
    }

    .form-control {
        border-radius: 8px !important;
        opacity: 1 !important;

        height: 50px !important;
        font-size: 13px;
    }

    input[type="date"] {
        cursor: pointer;
        border-radius: 4px;
        margin-right: 2px;
        color: #7ECD7C;


    }

    #msform {

        position: relative;
        margin-top: 20px
    }

    #msform fieldset {
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    #main_form {
        margin-top: -76px;
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform input:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid green;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: green;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;

    }

    #msform .action-button:hover {
        background-color: #311B92
    }

    #msform .action-button:focus {
        background-color: #311B92
    }

    #msform .action-button-pre {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-pre:hover {
        background-color: #000000
    }

    #msform .action-button-pre:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative
    }

    .fs-title {
        font-size: 25px;
        color: green;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: green;
        font-weight: normal
    }

    .steps {
        font-size: 15px;
        color: gray;
        margin-bottom: 1px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 20px;
        overflow: hidden;
        color: lightgrey
    }

    #progressbar .active {
        color: #48BA48;
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 45%;
        float: left;
        position: relative;
        font-weight: 400;
        font-family: 'Quicksand';
    }

    #progressbar #account:before {
        content: "\f13e";
        width: 37px;
        height: 52px;
    }

    #progressbar #personal:before {
        content: "\f007";
        width: 37px;
        height: 52px;
    }

    #progressbar #payment:before {
        content: "\f030";
        width: 37px;
        height: 52px;
    }

    #progressbar #confirm:before {
        content: "\f00c";
        width: 37px;
        height: 52px;
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before {
        background: #48BA48;
    }

    #progressbar li.active:after {
        background: #48BA48;
    }

    .progress {
        height: 20px
    }

    .pbar {
        background-color: green
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }

    .signup-step-container {
        background-image: url('../Assets/jobprovider/fluid.png');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
    }

    .card {
        border-radius: 25px !important;
        height: 450px !important;
        opacity: 0.7;
        margin-top: 25px;
    }

</style>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="
https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js
"></script>
    <link rel="stylesheet" href="../Assets/jobprovider/css/app.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class=" card col-md-12 col-lg-10 my-5">
                    <form id="msform">
                        <ul id="progressbar" style=" text-align: center;">
                            <li class="active" id="account"><strong>Step1</strong></li>
                            <li id="personal"><strong> Step2 </strong></li>
                        </ul>
                        <br>
                        <fieldset>
                            <div class="tab-content" id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4 class="text-center">Step 1</h4>
                                    <div class="row col-lg-12">
                                        <div class="col-md-4 col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="name"
                                                    placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="email" name="name"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row col-lg-12">
                                        <div class="col-md-4 col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="email" name="name"
                                                    placeholder="Mobile">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="password" name="name"
                                                    placeholder=" Your Designation">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class=" next btn-color "> NEXT</button>
                        </fieldset>
                        <!-- //#step2 -->
                        <fieldset>
                            <div class="tab-content " id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step2">
                                    <h4 class="text-center">Step 2</h4>
                                    <div class="row col-lg-12">
                                        <div class="col-md-4 col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="name"
                                                    placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-6">
                                            <div class="form-group select-sub">
                                                <select name="country" class="form-control" id="country">
                                                    <option value="NG" selected="selected">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="KP">North Korea</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row col-lg-12">
                                        <div class="col-md-4 col-lg-12">
                                            <div class="form-group">

                                                <textarea class="form-control" placeholder=" Street Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row col-lg-12">
                                        <div class="col-md-4 col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="email" name="name" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="password" name="name"
                                                    placeholder=" Your State">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row col-lg-12">
                                        <div class="col-md-4 col-lg-6">
                                            <div class="form-group">

                                                <input class="form-control" type="email" name="name"
                                                    placeholder="Country">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-6">
                                            <div class="form-group">

                                                <input class="form-control" type="password" name="name"
                                                    placeholder=" Pincode">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class=" pre btn-color ">PREVIOUS</button><button type="button"
                                class="  btn-color "> Register</button>
                            </fiedset>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<script>
    $(document).ready(function () {

        var current_fs, next_fs, pre_fs;
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;
        setProgressBar(current);
        $(".next").click(function () {
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            next_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now) {
                    opacity = 1 - now;
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });
        $(".pre").click(function () {
            current_fs = $(this).parent();
            pre_fs = $(this).parent().prev();
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            pre_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now) {
                    opacity = 1 - now;
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    pre_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });

        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percentpercent = percent.toFixed();
            $(".pbar")
                .css("width", percent + "%")
        }
        $(".submit").click(function () {
            return false;
        })
    });

</script>
