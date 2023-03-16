@extends('layouts.Dashboard')
@section('content')

<div class="col-lg-10 col-xl-10 col-md-12" id="main">

    <nav class="navbar navbar-light col-md-12 ">

        <h3 class=" mt-3  heading" style=""> Job Management</h3>


       <div class=" mt-12 pull-right">

            <div class="w-100">
                <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px; padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:44px;       height: 44px;   border-radius: 28%;"
                        src="{{Auth::guard('admin')->user()->image}} ">
                    <h6 class="profile">{{Auth::guard('admin')->user()->name}}</h6><span
                        style="font-size: 12px;font-weight:200px; padding-left:56px;!important;    font-weight: 200!important; ">{{Auth::guard('admin')->user()->role}}</span>
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

        <a  href="{{ route('get.addjob') }}"> <span class="icons"> <i class="fa fa-plus "
                    aria-hidden="true"></i></span></a>
    </nav>
    <!--Table-->
    <div class=" col-md-12 ">
        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-resp-noscroll" id="dt-vertical-scroll">
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
                        @foreach ($job as $jobs)
                            <tr>
                                <td>#{{ $jobs->job_id}}</td>
                                <td>{{ $jobs->created_at->format('d-m-Y')}}</td>
                                @if($jobs->user->company_name)
                                <td>{{ @$jobs->user->company_name}}</td>
                                @else
                                <td>{{Auth::guard('admin')->user()->name}}</td>
                                @endif
                                <td>{{ $jobs->jobname}}</td>
                                <td>{{ $jobs->jobcategory}}</td>
                                <td>{{ $jobs->expirydate->format('d-m-Y')}}</td>

                                <input type="hidden" id="jobs_id_{{$jobs->job_id}}" value="{{ $jobs->id }}"/>
                                @if($jobs->status =='Saved')  
                                <td class="text-right">
                                    <div class="action-btns d-flex justify-content-end">
                                        <a href="javascript:void(0)" data-popup="tooltip" title="View Cities" style="margin-right:5px;"
                                            class="mt-2"><i class="fa-solid fa-circle-check"
                                                style="font-size:25px;color:#7ECD7C" onclick="return statusapproved({{$jobs->job_id}});"></i></a>
                                        <a href="javascript:void(0)" data-popup="tooltip" title="Edit" data-placement="bottom"
                                            class="mt-2" style="margin-right:5px;"><i class="fa fa-times-circle"
                                                style="font-size:25px;color:#C15A5A" onclick="return statusrejected({{$jobs->job_id}});"></i></a>
                                    </div>
                                </td>
                                @endif
                                @if($jobs->status =='Active') 
                                <td style="color:#48BA48">
                                    Approved
                                </td>
                                @endif
                                @if($jobs->status =='Inactive') 
                                <td style="color:red">
                                    Rejected
                                </td>
                                @endif

                                <td class="text-right" style="width: 10%;">
                                    <div class="action-btns d-flex justify-content-end">
                                        <a href="{{route('show.job',$jobs->id)}}" data-popup="tooltip" title="View" style="margin-right:5px;"
                                            class="mt-2"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('edit.job',$jobs->id) }}" data-popup="tooltip" title="Edit" data-placement="bottom"
                                            class="mt-2" style="margin-right:5px;"><i class="fa fa-edit"></i></a>
                                            
                                        <a href="{{ route('response.job',$jobs->id) }}" data-popup="tooltip" title="Edit" data-placement="bottom"
                                            class="mt-2" style="margin-right:5px;"><i class="fa fa-user"></i></a>
                                        <a href="javascript:void(0)" onclick="return deleteitem({{$jobs->job_id}});" data-popup="tooltip"
                                            data-placement="bottom" class="mt-2" title="Delete"><i class="fa fa-trash"></i></a>
                                   

                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

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
    function statusapproved(id)
    {
        var id = $(`#jobs_id_${id}`).val();
        var url = '{{ route("job.approvde", ":id") }}';
        url = url.replace(':id', id);
        swal({
                title: "Are you sure?",
                //text: "You will not be able to recover this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Approved it!",
                cancelButtonText: "No, cancel pls!",
                closeOnConfirm: true,
                closeOnCancel: true
              },
              function(isConfirm) {
                if (isConfirm) {
                   $.ajax({
                            type:'POST',
                            url:url,
                            data:'_token={{ csrf_token() }}',
                            success:function(data){
                              if(data.success==1)
                              {
                                   swal(
                                        'Deleted!',
                                        'Job has been approved.',
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
    function statusrejected(id)
    {
        var id = $(`#jobs_id_${id}`).val();
        var url = '{{ route("job.rejected", ":id") }}';
        url = url.replace(':id', id);
        swal({
                title: "Are you sure?",
                //text: "You will not be able to recover this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Rejected it!",
                cancelButtonText: "No, cancel pls!",
                closeOnConfirm: true,
                closeOnCancel: true
              },
              function(isConfirm) {
                if (isConfirm) {
                   $.ajax({
                            type:'POST',
                            url:url,
                            data:'_token={{ csrf_token() }}',
                            success:function(data){
                              if(data.success==1)
                              {
                                   swal(
                                        'Deleted!',
                                        'Job has been rejected.',
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
    function deleteitem(id)
    {
        var id = $(`#jobs_id_${id}`).val();
        var url = '{{ route("job.destroy", ":id") }}';
        url = url.replace(':id', id);
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel pls!",
                closeOnConfirm: true,
                closeOnCancel: true
              },
              function(isConfirm) {
                if (isConfirm) {
                   $.ajax({
                            type:'POST',
                            url:url,
                            data:'_token={{ csrf_token() }}',
                            success:function(data){
                              if(data.success==1)
                              {
                                   swal(
                                        'Deleted!',
                                        'Job has been deleted.',
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
                } else {
                  swal("Cancelled", "Job is safe :)", "error");
                }
            });
    }
</script>
