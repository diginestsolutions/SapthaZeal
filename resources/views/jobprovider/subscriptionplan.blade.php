<style>
    body {
        font-family: 'Poppins' !important;
    }

    section.pricing {
        background-image: url('../Assets/jobprovider/fluid.png');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
    }

    .pricing .card {
        border: none;
        border-radius: 5rem;
        margin-top: 55px;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .card {
        height: 500px;
        width: 350px;
    }


    .pricing hr {
        margin: 1.5rem 0;
    }

    .pricing .card-title {
        margin: 0.5rem 0;
        font-size: 0.9rem;
        letter-spacing: .1rem;
        font-weight: bold;
    }

    .pricing .card-price {
        font-size: 2rem;
        margin: 0;
        color: #fff;
    }

    .pricing .card-price .period {
        font-size: 0.5rem;
    }
    .pricing .text-muted {
        opacity: 0.7;
    }

    .pricing .btn {


        letter-spacing: .1rem;
        font-weight: bold;

        opacity: 0.7;

    }

    /* Hover Effects on Card */

    @media (min-width: 992px) {
        .pricing .card:hover {
            margin-top: -.25rem;
            margin-bottom: .25rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
            background-color:#b1e5fd;
      
        }

        .pricing .card:hover .btn {
            opacity: 1;
        }
    }

    h4 {
        color: #0B8EBB;
    }

    .gradiennt {

        width: 350px;
        height: 90px;

        padding: 12px;
        padding-top: -21px;
        position: relative;
        background: transparent linear-gradient(180deg, #48D7FF 0%, #0080AE 100%);
        border-radius: 69px 69px 0px 0px;
        opacity: 1;
        right: 20px !important;
        top: -20px;
    }

</style>

<head>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/jobprovider/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet"
        href="//mojoaxel.github.io/bootstrap-select-country/dist/css/bootstrap-select-country.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
    <section class="pricing py-5">
        <div class="container">
            <div class="row">
                <!-- Free Tier -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <div class="gradiennt  ">

                                <h6 class="card-price text-center my-3">Silver</h6>

                            </div>

                            <h4 class="text-center ">₹2000</h4>
                            </br>
                            <ul class="fa-ul text-left">
                                <li><span class="fa-li"><i class="fa-regular fa-clock"></i></span>Period: 2 months</li>
                                <hr>
                                <li><span class="fa-li"><i class="fa fa-building-o"
                                            aria-hidden="true"></i></span>Maximum Job Post: 2</li>
                                <hr>
                                <li><span class="fa-li"><i class="fa-solid fa-user-tie"></i></span>No. of CV Per Post: 2
                                </li>
                                <hr>
                                <li><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>Extension 1 Month:
                                    1000</li>
                                    <div class="text-right">(Max 2 times)</div>
                                <div class="d-grid text-center">
                                    <a href="#" class="btn btn-primary text-uppercase">Try it</a>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <div class="gradiennt  ">

                                <h6 class="card-price text-center my-3">Gold</h6>

                            </div>

                            <h4 class="text-center ">₹5000</h4>
                            </br>
                            <ul class="fa-ul text-left">
                                <li><span class="fa-li"><i class="fa-regular fa-clock"></i></span>Period: 3 months</li>
                                <hr>
                                <li><span class="fa-li"><i class="fa fa-building-o"
                                            aria-hidden="true"></i></span>Maximum Job Post: 5</li>
                                <hr>
                                <li><span class="fa-li"><i class="fa-solid fa-user-tie"></i></span>No. of CV Per Post: 7
                                </li>
                                <hr>
                                <li><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>Extension 1 Month:
                                    1500</li>
                                    <div class="text-right">(Max 2 times)</div>
                                <div class="d-grid text-center">
                                    <a href="#" class="btn btn-primary text-uppercase">Try it</a>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- Pro Tier -->
                <div class="col-lg-4">
                    <div class="card   mb-5 mb-lg-0">
                        <div class="card-body">
                            <div class="gradiennt  ">

                                <h6 class="card-price text-center my-3">Platinum</h6>

                            </div>

                            <h4 class="text-center ">₹10000</h4>
                            </br>
                            <ul class="fa-ul text-left">
                                <li><span class="fa-li"><i class="fa-regular fa-clock"></i></span>Period: 6 months</li>
                                <hr>
                                <li><span class="fa-li"><i class="fa fa-building-o"
                                            aria-hidden="true"></i></span>Maximum
                                    Job Post: 15</li>
                                <hr>
                                <li><span class="fa-li"><i class="fa-solid fa-user-tie"></i></span>No. of CV Per Post: 7
                                </li>
                                <hr>
                                <li><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>Extension 1 Month:
                                    3000
                                </li>
                                <div class="text-right">(Max 2 times)</div>
                                <div class="d-grid text-center">
                                    <a href="#" class="btn btn-primary text-uppercase">Try it</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</body>
