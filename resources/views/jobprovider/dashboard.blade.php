<style>
    body {
        font-family: 'Poppins' !important;
        background-image: url('../Assets/jobprovider/1.png');
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

</style>
<link rel="stylesheet" href="../Assets/jobprovider/css/app.css">
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
                <img src="../Assets/jobprovider/logo white.png" class="img-fluid " width="150" alt="Sample image">
            </div>
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
            <div class="menu-list">
                <ul id="menu-content" class="menu-content collapse out">
                    <li class="collapsed active">
                        <a href="#">
                            <i class="fa-solid fa-business-time fa-lg"></i>Job Management
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-bell fa-lg"></i> Notification
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user fa-lg"></i> Profile
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-telegram-plane fa-lg"></i> Upgrade Plan
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-file-invoice fa-lg"></i> My Order
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9  col-md-12" id="main">
            <div class="  pull-right">
                <div class="w-100">
                    <h6 class="profile">VYSHNAVI RS</h6><span class="role ">HR manager</span>
                    <button class="btn profile-bt" type="button"><img class="user-avatar  pull-right" style=""
                            src="../Assets/jobprovider/images (6).jfif ">
                    </button>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</body>
