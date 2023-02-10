@extends('layouts.Dashboard')
@section('content')

<div class="col-lg-10 col-md-12" id="main">

    <nav class="navbar navbar-light col-md-12 ">

        <h3 class=" mt-3  heading" style="">Industry Management</h3>


        <div class=" mt-12 pull-right">

            <div class="w-100">
                <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px;  padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:26px;    border-radius: 28%;"
                        src="{{Auth::user()->image}} ">
                    <h6 class="profile">{{Auth::user()->name}}</h6><span
                        style="font-size: 12px;font-weight:200px; padding-left:56px;!important;    font-weight: 200!important; ">{{Auth::user()->role}}</span>
                </button>

                <button class="btn noti " type="button"> <span class="icons1"><i class="fa fa-bell"></i><span></button>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>



        </div>


    </nav>
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
    <nav class="navbar navbar-light ">

        <a class="btn " href="" data-toggle="modal" data-target="#industryModal"> <span class="icons"> <i
                    class="fa fa-plus " aria-hidden="true"></i></span></a>


        <div class=" has-search col-md-3">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class=" form-control form-control-lg " placeholder="Search">
        </div>
    </nav>
    <!--Table-->
    <div class=" col-md-12 ">
        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-resp-noscroll">
                        <thead>
                            <tr>
                                <th>Industry ID</th>
                                <th>Industry Name</th>
                                <th>Actions</th>

                            </tr>
                            @foreach ($industry as $industrys)
                        <tbody>

                            <tr>
                                <td>#{{ $industrys->industry_id}}</td>
                                <td>{{ $industrys->name}}</td>

                                <td>
                                    <a href="javascript:void(0)" onclick="return edititem({{$industrys->industry_id}});" data-popup="tooltip"
                                            title="Edit" data-placement="bottom" class="mt-2"
                                            style="margin-right:5px;"><i class="fa fa-edit"></i></a>

                                    <input type="hidden" id="industry_id_{{$industrys->industry_id}}" value="{{ $industrys->id }}"/>
                                        
                                    <a href="javascript:void(0)" onclick="return deleteitem({{$industrys->industry_id}});" data-popup="tooltip"
                                            data-placement="bottom" class="mt-2" title="Delete"><i class="fa fa-trash"></i></a>
                                   

                                </td>
                            </tr>
                            @endforeach
                            </thead>

                    </table>

                </div>
            </div>
        </div>
    </div>




</div>
@endsection


<script>
    function myFunction() {
        if (!confirm("Are You Sure to delete this"))
            event.preventDefault();
    }

</script>








<!-- <script src="https://code.jquery.com/jquery-1.9.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {


$('.navbar-toggler').click(function () {
    if ($(window).width() < 960) {
        $("#sidenav1").toggle("slide");
}
else {
    $("#sidenav1").toggle();
}
  
    
});

});
    </script> -->
