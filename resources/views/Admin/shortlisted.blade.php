@extends('layouts.Dashboard')
@section('content')
<div class="col-lg-10 col-xl-10 col-md-12" id="main">

    <nav class="navbar navbar-light col-md-12 ">

        <h3 class=" mt-3  heading" style=""> Job Management</h3>


        <div class=" mt-12 pull-right">

            <div class="w-100">
                <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px; padding: 0px!important; "><img
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
    </nav>
    <!--Table-->
    <div class=" col-md-12 ">
        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-resp-noscroll">
                        <thead>
                            <tr>
                                <th>Job ID</th>
                                <th>Job Name</th>
                                <th>JobProvider Name</th>
                                <th>Experience Required</th>
                                <th>Job Location</th>
                                <th>Shortlist</th>

                            </tr>
                        </thead>
                        @foreach ($job as $jobs)
                        <tbody>

                            <tr>
                                <td>#{{ $jobs->job_id}}</td>
                                <td>{{ $jobs->jobname}}</td>
                                <td>{{ $jobs->jobprovider }}</td>
                                <td>{{ $jobs->experienceyears}}Year {{ $jobs->experiencemonths}}Month</td>
                                <td>{{ $jobs->joblocation}}</td>
                                <input type="hidden" id="jobs_id_{{$jobs->job_id}}" value="{{ $jobs->id }}"/>
                                <td class="text-right" style="width: 10%;">
                                    <div class="action-btns d-flex justify-content-end">
                                        @if($jobs->job_applied_details->count() > 0)
                                        <label style="color: #65ab65;"><b>Shortlisted</b></label>
                                        @else
                                        <button onclick="return shortlisted({{$jobs->job_id}});" style="background-color: #3a50b0;border: 0px;color: white;border-radius: 8px;padding-left: 7px;padding-right: 7px;">Shortlist</button>
                                        @endif
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>   
<script>
    function shortlisted(id)
    {
        var url = $(location).attr('href'),
        parts = url.split("/"),
        candidate_id = parts[parts.length-1];
        var id = $(`#jobs_id_${id}`).val();
        var url = '{{ route("candidate.shortlisted", ['id' => ':id', 'candidate_id' => ':candidate_id']) }}';
        url = url.replace(':id', id);
        url = url.replace(':candidate_id', candidate_id);
        swal({
                title: "Are you sure want to shortlist this candidate?",
                //text: "You will not be able to recover this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Shortlisted it!",
                cancelButtonText: "No, cancel pls!",
                closeOnConfirm: true,
                closeOnCancel: true
              },
              function(isConfirm) {
                if (isConfirm) {
                   $.ajax({
                            type:'GET',
                            url:url,
                            data:'_token={{ csrf_token() }}',
                            success:function(data){
                              if(data.success==1)
                              {
                                   swal(
                                        'Deleted!',
                                        'Candidate has been shortlisted.',
                                        'success'
                                      );
                                      $('#row'+id).remove();
                                      location.reload();
                              }
                              else
                              {
                                  swal(
                                        'Failed!',
                                        data.message,
                                        'error'
                                      );
                              }
                            },
                            error:function(data)
                            {
                                console.log(data);
                                swal(
                                        'Failed!',
                                        data.message,
                                        'error'
                                      );
                            }
                            
                         });
                }
            });
    }
</script>
