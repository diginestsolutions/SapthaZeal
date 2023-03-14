<style>
    body {
        font-family: 'Poppins' !important;
        background-image: url('{{ asset('Assets') }}/jobprovider/1.png');
    }

    .profile {

        display: flex;
        padding-left: 44px !important;
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
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
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
                <li  class="active">
                   
                        <a href="{{route('jobprovider.job')}}"  class="active">
                            <i class="fa-solid fa-business-time fa-lg"></i>Job Management</a>
                    </li>

                    <li>
                        <a href="">
                            <i class="fa-solid fa-bell fa-lg"></i> Notification</a>
                    </li>
                    <li>
                        <a href="{{route('profile')}}">
                            <i class="fa fa-user fa-lg"></i> Profile</a>
                    </li>
                    <li>
                        <a href="{{route('subscription')}}">
                            <i class="fa fa-telegram-plane fa-lg"></i> Upgrade Plan</a>
                    </li>
                    <li>
                        <a href="{{route('order')}}">
                            <i class="fas fa-file-invoice fa-lg"></i> My Order</a>
                    </li>
</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9   col-md-12" id="main">





            <div class="  pull-right">

                <div class="w-100">
                    <h6 class="profile">VYSHNAVI RS</h6><span class="role ">HR manager</span>
                    <button class="btn profile-bt" type="button"><img class="user-avatar  pull-right" style=""
                            src="{{ asset('Assets') }}/jobprovider/images (6).jfif ">

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
<script src="https://code.jquery.com/jquery-1.9.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script type="text/javascript">

  $(document).ready(function(){
    
    $('ul li a').click(function(){
      $('li ').removeClass("active");
      $(this).addClass("active");
    });
  });
</script>