<style>
    body {
        font-family: 'Poppins' !important;
        background-image: url('{{ asset('Assets') }}/jobprovider/1.png');
    }

    .profile {

        display: flex;
        padding-left: 60px !important;
        color: black;
        font-weight: 600;
    }

    .role {
        font-size: 10px;
        font-weight: 200px;
        color: #8f9198;
        padding-left: 56px !important;
        font-weight: 200 !important;
    }

    .profile-bt {
        margin-top: -28px;
        background-color: #cce5ff;
        border: none;
        border-radius: 21px;
        padding: 0px !important;
    }

    .user-avatar {
        width: 44px;
        height: 44px;
        border-radius: 28%;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:active {
  background: none;
  color: black !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current,
.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {

  background-color: #208CD1 !important;

  border: none !important;
  border-radius: 35px !important;

}

.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {

  background-color: #7ECD7C !important;
  border: none !important;
  border-radius: 35px !important;

}

.dataTables_wrapper .dataTables_paginate .paginate_button.current {
  color: none !important;
}

  


</style>
<link rel="stylesheet" href="{{ asset('Assets') }}/jobprovider/css/app.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


<body>
    <div class="col-lg-12 p-0">
        <div class="nav-side-menu col-lg-3  p-0  ">
            <div class="brand">

                <img src="{{ asset('Assets') }}/jobprovider/logo white.png" class="img-fluid " width="150" alt="Sample image">

            </div>
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

            <div class="menu-list">

                <ul id="menu-content" class="menu-content collapse out">
                <li>
                   <li class="sideNav">
                   
<<<<<<< HEAD
                        <a href="{{route('jobprovider.job')}}"  class="active">
=======
                        <a href="{{route('jobprovider.job')}}" >
>>>>>>> 4d19146ebfa9f9ce9de1d1080a82122fe5728a98
                            <i class="fa-solid fa-business-time fa-lg"></i>Job Management</a>
                    </li>

                    <li class="sideNav">
                        <a href="">
                            <i class="fa-solid fa-bell fa-lg"></i> Notification</a>
                    </li>
                    <li class="sideNav">
                        <a href="{{route('jobprovider.profile')}}">
                            <i class="fa fa-user fa-lg"></i> Profile</a>
                    </li>
                    <li class="sideNav">
                        <a href="{{route('jobprovider.subscription')}}">
                            <i class="fa fa-telegram fa-lg"></i> Upgrade Plan</a>
                    </li>
                    <li class="sideNav">
                        <a href="{{route('jobprovider.order')}}">
                            <i class="fas fa-file-invoice fa-lg"></i> My Order</a>
                    </li>
                </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9   col-md-12" id="main">





            <div class="  pull-right">

                <div class="w-100">
                    <h6 class="profile">{{Auth::guard('jobprovider')->user()->name}}</h6><span class="role ">{{Auth::guard('jobprovider')->user()->designation}}</span>
                    <button class="btn profile-bt" type="button"><img class="user-avatar  pull-right" style=""
                            src="{{Auth::guard('jobprovider')->user()->image}} ">
                    </button>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</body>
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" />

<script>
    $(document).ready(function () {
        $('#dt-vertical-scroll').dataTable();
    });

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
    
    var sideNav = $('.sideNav');
$('.sideNav').click(function() {
   
  $('.sideNav').removeClass('active');
  $(this).addClass('active');
});
  });
</script>