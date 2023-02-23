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
        background-image: url('../assets/Login.png');
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
            width: 200px;
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
            z-index:1;
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
         top:0;
    }

    .img-fluid {
        margin-top: 25px;

    }

</style>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
</head>
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 col-lg-6 col-xl-5">
                <img src="../assets/Untitled-2.png" class="img-fluid" style="width: 500px;" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <div class="col-12 mx-auto d-flex justify-content-center flex-wrap">
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <img src="../assets/logo.png" class="img-fluid" alt="Sample image">
                    </div>


                
                </div>
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
   
                <form method="POST" action="{{ route('get.otp') }}">
                        @csrf
                      
                    <h3 class="mb-5 text-center heading" style="">LOGIN</h3>

                    <div class="form-row justify-content-center">
                        <div class="form-group ">
                            <div class="input-group mx-auto mb-3">
                                <span class="icons"> <i class="fa fa-phone icon" style="font-size:25px;"></i></span>
                                <input class="form-control" type="text" placeholder="Phone number" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                    style="text-align:center; border-radius:13px;text-align:center; border-radius:13px;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #eeeeee;" maxlength=10/>
                            </div>
                        </div>
                      

                    </div>
                    <div class="row justify-content-center">
                        @error('phone')
                    </br><span style="color: red;">{{$errors->first('phone')}}</span>
                        @enderror
                    </div>
                   

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
                        letter-spacing: 1.25px;
                        border:none;
                        color: #FFFFFF;
                        text-transform: uppercase;
                        opacity: 1;
                        background-image: linear-gradient(to right,  #69DB65 51%, #208CD1 100%);
                        width: 100px;
                    ;" >LOGIN</button>

                    </div>

                </form>
            </div>
        </div>
    </div>

</section>
