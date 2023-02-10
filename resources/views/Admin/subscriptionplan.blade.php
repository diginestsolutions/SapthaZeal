@extends('layouts.Dashboard')
@section('content')
<style>
   

.table{
    border:none !important;
}
td{
    text-align:center;  
}

.table th{
    padding: 1rem !important;
    text-align:center;
}

.table thead th {
    vertical-align: bottom;
     border-bottom: none !important;
}

    </style>
<div class="col-lg-10 col-md-12" id="main">

    <nav class="navbar navbar-light col-md-12 ">

        <h3 class="mt-3  heading" style="">Subscription Plans</h3>


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

    <!--Table-->
    <div class=" col-md-12  mt-4 ">
        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
           
                <div class="table-responsive">
                    <table class=" table   table-resp-noscroll">


                        <thead >
                            <tr>
                                <th style="border-top: none!important; border-right: 2px solid #00000005 ;">Plan</th>
                                @foreach ($subscriptionplans as $sub)
                                <th style="border-top: none!important;">{{$sub->name}}</th>
                                @endforeach


                            </tr>

                            <tr>
                                <th style="border-right: 2px solid #00000005 ;">Period</th>
                                @foreach ($subscriptionplans as $sub)
                                <td>{{ implode(", ",$sub->period)}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th style="border-right: 2px solid #00000005 ;">Maximum job post</th>
                                @foreach ($subscriptionplans as $sub)
                                <td>{{$sub->maximumjobpost}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th style="border-right: 2px solid #00000005 ;">Cvs per post</th>
                                @foreach ($subscriptionplans as $sub)
                                <td>{{$sub->cvsperpost}}</td>
                                @endforeach
                            </tr>
                            <tr>
                                <th style="border-right: 2px solid #00000005 ;">Amount</th>
                                @foreach ($subscriptionplans as $sub)
                                <td>{{$sub->amount}}</td>
                                @endforeach
                            </tr>
                </div>



                </thead>

                </table>

            
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
