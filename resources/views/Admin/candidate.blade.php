@extends('layouts.Dashboard')
@section('content')
<div class="col-lg-10  col-md-12" id="main">

<nav class="navbar navbar-light col-md-12 ">

    <h3 class=" mt-3  heading" style=""> Candidate Management</h3>


    <div class=" mt-12 pull-right">

        <div class="w-100">
        <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:11px;  width: 132px;padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:26px;    border-radius: 28%;"
                        src="{{Auth::user()->image}} ">
                    <h6 class="profile">{{Auth::user()->name}}</h6><span
                        style="font-size: 12px;font-weight:200px; padding-left:56px;!important;    font-weight: 200!important; ">{{Auth::user()->role}}</span>
                </button>

            <button class="btn noti " type="button"> <span class="icons1"><i
                        class="fa fa-bell"></i><span></button>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>



    </div>


</nav>


<nav class="navbar navbar-light ">

    <a class="btn " href="{{ route('view.addcandidate') }}" > <span class="icons"> <i class="fa fa-plus "
                aria-hidden="true"></i></span></a>



    <div class="form-group has-search ">
        <span class="fa fa-search form-control-feedback"></span>
        <input type="text" class="form-control " placeholder="Search">
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
                                        <th style="width:14%">Job Seeker ID</th>
                                        <th style="width:14%" >Created Date</th>
                                        <th>Name</th>
                                        <th style="width: 15%">Mobile Number</th>
                                        <th>Email Address</th>
                                        <th style="width: 13%">Prefered Job Location</th>
                                        <th>Designation</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                           
                                @foreach ($results  as $candidates)
                                <tbody>

                                    <tr>
                                        <td>#{{ $candidates->candidate_id}}</td>
                                       <td>{{$candidates->created_at}}</td>
                                       <td>{{$candidates->user['name']}}</td>
                                       <td>{{$candidates->user['mobile']}}</td>
                                       <td>{{$candidates->user['email']}}</td>
                                       <td>{{$candidates->joblocation}}</td>
                                       <td>{{$candidates->designation}}</td>
                                        <td class="text-right" >
                                            <div class="action-btns d-flex justify-content-end">
                                                <a href="" data-popup="tooltip" title="View Cities"
                                                    style="margin-right:5px;" class="mt-2"><i class="fa fa-eye"></i></a>
                                                <a href="" data-popup="tooltip" title="Edit" data-placement="bottom"
                                                    class="mt-2" style="margin-right:5px;"><i
                                                        class="fa fa-edit"></i></a>

                                                <a href="" data-popup="tooltip" title="Edit" data-placement="bottom"
                                                    class="mt-2" style="margin-right:5px;"><i
                                                        class="fa fa-user"></i></a>
                                               
                                            </div>
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
        


    





