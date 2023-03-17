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
        .pricing .card .active{
            margin-top: -.25rem;
            margin-bottom: .25rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
            background-color:#b1e5fd;
           border-radius:78px;
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
    .form-control2 {
        font-size: 16px !important;
        border-radius: 16px !important;
        opacity: 1 !important;
        /* box-shadow: -31px 3px 6px #0000000d; */
        border: none !important;
        background-color: #b1e5fd;
    }
    input:focus {
        outline:none;
    }
    @media (min-width: 992px) {
        .pricing .card .active{
            margin-top: -.25rem;
            margin-bottom: .25rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
            background-color:#b1e5fd;
           border-radius:78px;
        }

        .pricing .card:hover .btn {
            opacity: 1;
        }
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
                @php
                    $i = 0;
                @endphp
                @if($subscription)
                @foreach($subscription as $sub)
                @if($sub->id == $jobprovider->subscriptionplan)
                <input type="hidden" name="subscription" id="subscription{{$i}}" value="{{$sub->id}}">
                <div class="col-lg-4">
                    <div class="card  mb-5 mb-lg-0">
                        <div class="card-body active">
                            <div class="gradiennt  ">
                                <h6 class="card-price text-center my-3">{{$sub->name}}</h6>
                            </div>
                            </br>
                            <ul class="fa-ul text-left ">
                                <li >
                                    <span class="fa-li"><i class="fa-regular fa-clock"></i></span>Period: 
                                    <select id="select{{$i}}" class="form-control2">
                                        <option>Choose Plan</option>
                                        @foreach($sub->period as $su)
                                        <option value="{{$su}}" {{@$su == $jobprovider->duration ? 'selected' : ''}}>{{$su}}</option>
                                        @endforeach
                                    </select>
                                </li>
                                <hr>
                                <li><span class="fa-li"><i class="fa fa-building-o"
                                            aria-hidden="true"></i></span>Maximum Job Post: {{$sub->maximumjobpost}}</li>
                                <hr>
                                <li><span class="fa-li"><i class="fa-solid fa-user-tie"></i></span>No. of CV Per Post: {{$sub->cvsperpost}}
                                </li>
                                <hr>
                                <li><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>Amount:
                                <?php
                                if($i == 0) {
                                    if( $jobprovider->duration == "1month")
                                        $amount = 2000;
                                    if( $jobprovider->duration == "3month")
                                        $amount = 3*2000;
                                    if( $jobprovider->duration == "6month")
                                        $amount = 6*2000;
                                    if( $jobprovider->duration == "1year")
                                        $amount = 12*2000;
                                }
                                if($i == 1) {
                                    if( $jobprovider->duration == "1month")
                                        $amount = 5000;
                                    if( $jobprovider->duration == "3month")
                                        $amount = 3*5000;
                                    if( $jobprovider->duration == "6month")
                                        $amount = 6*5000;
                                    if( $jobprovider->duration == "1year")
                                        $amount = 12*5000;
                                }
                                if($i == 2) {
                                    if( $jobprovider->duration == "1month")
                                        $amount = 10000;
                                    if( $jobprovider->duration == "3month")
                                        $amount = 3*10000;
                                    if( $jobprovider->duration == "6month")
                                        $amount = 6*10000;
                                    if( $jobprovider->duration == "1year")
                                        $amount = 12*10000;
                                }
                                ?>
                                <input type="text" name="amount" id="amount{{$i}}" value="{{$amount}}" class="form-control2">
                                </li>
                                <div class="d-grid text-center">
                                    <a href="#" class="btn btn-primary text-uppercase" onclick="submitPlan({{$i}});">Try it</a>
                                </div>
                        </div>
                    </div>
                </div>
                @else
                <input type="hidden" name="subscription" id="subscription{{$i}}" value="{{$sub->id}}">
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <div class="gradiennt">
                                <h6 class="card-price text-center my-3">{{$sub->name}}</h6>
                            </div>
                            </br>
                            <ul class="fa-ul text-left">
                                <li>
                                    <span class="fa-li"><i class="fa-regular fa-clock"></i></span>Period: 
                                    <select id="select{{$i}}" class="form-control2">
                                        <option>Choose Plan</option>
                                        @foreach($sub->period as $su)
                                        <option value="{{$su}}">{{$su}}</option>
                                        @endforeach
                                    </select>
                                </li>
                                <hr>
                                <li><span class="fa-li"><i class="fa fa-building-o"
                                            aria-hidden="true"></i></span>Maximum Job Post: {{$sub->maximumjobpost}}</li>
                                <hr>
                                <li><span class="fa-li"><i class="fa-solid fa-user-tie"></i></span>No. of CV Per Post: {{$sub->cvsperpost}}
                                </li>
                                <hr>
                                <li><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>Amount:
                                <input type="text" name="amount" id="amount{{$i}}" value="{{$sub->amount}}" class="form-control2">

                                </li>
                                <div class="d-grid text-center">
                                    <a href="#" class="btn btn-primary text-uppercase" onclick="submitPlan({{$i}});">Try it</a>
                                </div>
                        </div>
                    </div>
                </div>
                @endif
                @php
                    $i = $i+1;
                @endphp
                @endforeach()
                @endif
            </div>
            <div class="alert alert-danger" id="err" style="display: none"><label for="myalue1"></label></div>
        </div>
        
    </section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $('#select0').on('change', function() {
        if( this.value == "1month")
        {
            $('#amount0').val(2000);
        }
        if( this.value == "3month")
        {
            $('#amount0').val(3*2000);
        }
        if( this.value == "6month")
        {
            $('#amount0').val(6*2000);
        }
        if( this.value == "1year")
        {
            $('#amount0').val(12*2000);
        }
    });
    $('#select1').on('change', function() {
        if( this.value == "1month")
        {
            $('#amount1').val(5000);
        }
        if( this.value == "3month")
        {
            $('#amount1').val(3*5000);
        }
        if( this.value == "6month")
        {
            $('#amount1').val(6*5000);
        }
        if( this.value == "1year")
        {
            $('#amount1').val(12*5000);
        }
    });
    $('#select2').on('change', function() {
        if( this.value == "1month")
        {
            $('#amount2').val(10000);
        }
        if( this.value == "3month")
        {
            $('#amount2').val(3*10000);
        }
        if( this.value == "6month")
        {
            $('#amount2').val(6*10000);
        }
        if( this.value == "1year")
        {
            $('#amount2').val(12*10000);
        }
    });
    function submitPlan(index)
    {
        var plan =  $('#select'+index).val();
        var amount =  $('#amount'+index).val();
        var subscription = $('#subscription'+index).val();
        var url = '{{ route("jobprovider.dosubscription") }}';
        var token = "{{ csrf_token() }}";
        var error = 0;
        if(plan == '')
        {
            jQuery("label[for='myalue1']").html("Choose any of plan");
            err.style.display = "block";
            error++;
        }
        if(error == 0) {
            $.ajax({
                type:'POST',
                url:url,
                dataType: 'json',  
                data: { plan: plan,amount: amount,subscription: subscription,_token: token },
                success:function(data) {
                    if(data.success==1)
                    {
                        location.reload();
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
    }
</script>