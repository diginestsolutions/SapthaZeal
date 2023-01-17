<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;

    }

    body {
        background: #f3f5f9;
    }

    .wrapper {
        position: relative;
    }

    .sidebar {
        position: fixed;
        width: 280px;
        height: 100%;
        background: #fff;
        padding: 10px 0;
        border-radius: 15px;
        margin: 10px 0 10px;
        margin-bottom: 10px;
        z-index: 1;
        overflow: hidden;

        color: #000000;
        opacity: 1;
    }


    .card {
        padding: 20px;
        margin: 10px 0 10px;
    }

    ul {
        padding-bottom: 10px;
        padding-left: 40px;
    }

    h3 {
        text-align: left;
        font: normal normal medium 52px/63px Quicksand;

        color: #000000;
        opacity: 1;
    }

    .sidebar ul li {
        padding: 15px;
        color: #000000;
        display: block;

    }

    .sidebar ul li a {
        color: #000000;
        display: block;
    }

    .sidebar ul li a .fas {
        width: 80px;
        color: #bdb8d7 !important;
    }


    .img-fluid {
        margin-top: 5px;

    }

    /* .sidebar ul li a .far {
        width: 30px;
        color: #bdb8d7 !important;
    } */

    .sidebar ul li:hover {
        background: #49B945;
        opacity: 0.2;

    }

    .sidebar ul li :hover {
        color: #72c971;
        text-decoration: none;


    }

    .icons {
        padding: 13px;
        background: #7ECD7C;
        color: white;
        font-size: 15px;
        text-align: center;
        border-radius: 15px;
    }

    .icons1 {
        padding: 10 12 10 12px;
        background: #ffff;
        color: #208CD1;
        ;
        font-size: 20px;
        text-align: center;
        margin-top: 50px;
        border-radius: 15px;
    }

    .container-fluid {
        background-image: url('../Assets/1.png');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
    }

    .table1 {
        border-radius: 15px;
    }

    .has-search .form-control {
        padding-left: 2.375rem;
        width: 180px;
        float: right !important;
        border-radius: 15px;

    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 50px;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    thead {
        font: normal normal medium 52px/63px Quicksand;

    }

    .user-area .user-avatar {
        float: right;
        margin-top: 4px;
        width: 32px;
    }

    .icons2 {
        height: 46px;
        width: 36px;
    }
    @media screen and (min-width: 768px) {

.navbar-toggler{
        display:none;
    }
    }
   

</style>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="
https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js
"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<div class="container-fluid h-custom native-scroll">
    <div class="wrapper d-flex">
        <div class="sidebar  col-2 " id="sidebarCollapse">

            <div class="col-12 mx-auto d-flex justify-content-center flex-wrap  ">
                <div class=" col-lg-12 ">
                    <img src="../Assets/logo.png" class="img-fluid" alt="Sample image">
                </div>
                
                <ul>
                    <li><a href="#">Job Management</a></li>
                    <li><a href="#">Job Provider Management</a></li>
                    <li><a href="#">Candidate Management</a></li>
                    <li><a href="#">Order Management</a></li>
                    <li><a href="#">Subscription Plans</a></li>
                    <li><a href="#">Admin Management</a></li>
                    <li><a href="#">Notifications</a></li>
                    <li><a href="#">Profile</a></li>

                    <button type="button" class="btn btn-primary"
                        style="border-radius: 0px 0px 23px 23px; width:250px;">Logout</button>

                </ul>

            </div>
        </div>



        <div class="col-10" id="main">
            <nav class="navbar navbar-light ">

                <h3 class=" mt-3  heading" style=""> <a class="navbar-brand">Job Management</a></h3>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidebarCollapse">
                <i class="fa fa-bars" style="font-size:48px; border:none;"></i>
                </button>

                <div class=" mt-12 pull-right">
                    <form class="form-inline my-2 my-lg-0 justify-content-center" method="GET">
                        <div class="w-100">
                        <button class="btn   btn-primary" type="button"
                        style="width:100px;  background-color:white;border:none;border-radius:22px;"><img
                            class="user-avatar rounded-circle pull-right" style="height:36px;width:46px;"
                            src="https://colorlib.com/polygon/sufee/images/admin.jpg"></button>

                            <button class="btn noti " type="button"> <span class="icons1"><i
                                        class="fa fa-bell"></i><span></button>
                        </div>

                    </form>

                </div>


            </nav>
            <div class="input-group  ">
                <button type="button" class=" btn  "> <span class="icons"> <i class="fa fa-plus "
                            aria-hidden="true"></i></span></button>

            </div>

            <div class="form-group has-search pull-right">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control " placeholder="Search">
            </div>
            <!--Table-->

            <div class=" col-md-12">
                <div class="card col-md-12" style="border-radius:15px;">
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-resp-noscroll">
                        <thead>
                            <tr>
                                <th>Job ID</th>
                                <th>Created Date</th>
                                <th>JobProvider Name</th>
                                <th>Job Name</th>
                                <th>Category</th>
                                <th>Expiry Date</th>
                                <th>Approval Status</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                            </tr>
                            <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-right" style="width: 10%;"> 
                                        <div class="action-btns d-flex justify-content-end">
                                        <a href="" data-popup="tooltip" title="View Cities"style="margin-right:5px;" class="mt-2"><i class="fa-solid fa-circle-check"style="font-size:25px;color:#7ECD7C"></i></a>
                                            <a href=""
                                               data-popup="tooltip" title="Edit"
                                                data-placement="bottom" class="mt-2"style="margin-right:5px;"><i class="fa fa-times-circle" style="font-size:25px;color:#C15A5A"></i></a>
                                                    
                                              
                                        </div>
                                    </td>
                                 <td class="text-right" style="width: 10%;"> 
                                        <div class="action-btns d-flex justify-content-end">
                                        <a href="" data-popup="tooltip" title="View Cities"style="margin-right:5px;" class="mt-2"><i class="fa fa-eye"></i></a>
                                            <a href=""
                                               data-popup="tooltip" title="Edit"
                                                data-placement="bottom" class="mt-2"style="margin-right:5px;"><i class="fa fa-edit"></i></a>
                                                    
                                                <a href=""
                                               data-popup="tooltip" title="Edit"
                                                data-placement="bottom" class="mt-2" style="margin-right:5px;"><i class="fa fa-user" ></i></a>
                                                <a href=""
                                               data-popup="tooltip" title="Edit"
                                                data-placement="bottom" class="mt-2"><i class="fa fa-trash" ></i></a>
                                       
                                        </div>
                                    </td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
                            </tr>
                            <tr></tr>
                            <tr></tr>
                            <tr>
                                 </tr>
                        </tbody>
                    </table>
</div>
</div>
                </div>
            </div>

        </div>


    </div>
</div>

   