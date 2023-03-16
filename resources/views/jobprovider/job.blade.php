@extends('layouts.jobprovider.app')
@section('content')
<style>
    body {
        text-decoration: none;
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
    .addbutton:hover{
        text-decoration:none;
    }

</style>
<body>
  <h3 class="  heading" style=""> Job Management <a class="addbutton" class="btn" href="{{ route('jobprovider.job.create') }}"> <span
                class="icons"> <i class="fa fa-plus " aria-hidden="true"></i></span>ADD</a></h3>
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
        <div class="card  " style="border-radius:15px;margin-top:72px">
        <div class="card-body ">
            <div class="table-responsive">
                <table class="table table-resp-noscroll" id="dt-vertical-scroll">
                    <thead>
                        <tr>
                            <th>Job ID</th>
                            <th>Created Date</th>
                            <th>Job Name</th>
                            <th>Category</th>
                            <th>Location</th>
                            <th>Approval Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                        <tr>
                            <td>#{{ $job->job_id}}</td>
                            <td>{{ $job->created_at->format('d-m-Y')}}</td>
                            <td>{{ $job->jobname}}</td>
                            <td>{{ $job->jobcategory}}</td>
                            <td>{{ $job->joblocation}}</td>
                            <input type="hidden" id="jobs_id_{{$job->job_id}}" value="{{ $job->id }}"/>
                            @if($job->status =='Saved')  
                                <td style="color:#e37b11">
                                Pending
                                </td>
                            @endif
                            @if($job->status =='Active') 
                                <td style="color:#48BA48">
                                    Approved
                                </td>
                            @endif
                            @if($job->status =='Inactive') 
                                <td style="color:red">
                                    Rejected
                                </td>
                            @endif
                            <td class="text-right" style="width: 10%;">
                                <div class="action-btns d-flex justify-content-end">
                                    <a href="{{route('jobprovider.job.show',$job->id)}}" data-popup="tooltip" title="View" style="margin-right:5px;"
                                    class="mt-2"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('jobprovider.job.edit',$job->id) }}" data-popup="tooltip" title="Edit" data-placement="bottom"
                                    class="mt-2" style="margin-right:5px;"><i class="fa fa-edit"></i></a>     
                                    <a href="javascript:void(0)" onclick="return deleteitem({{$job->job_id}});" data-popup="tooltip"
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
</body>
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>   
<script>
    function deleteitem(id)
    {
        var id = $(`#jobs_id_${id}`).val();
        var url = '{{ route("jobprovider.job.destroy", ":id") }}';
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