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

        <a class="btn " href="{{ route('get.addindustry') }}"> <span class="icons"> <i class="fa fa-plus "
                    aria-hidden="true"></i></span></a>



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
                                <th>Job ID</th>
                                <th>Industry Name</th>
                                <th>Approval Status</th>
                                <th>Actions</th>

                            </tr>
                            @foreach ($industry as $industrys)
                        <tbody>

                            <tr>
                                <td>#{{ $industrys->industry_id}}</td>
                                <td>{{ $industrys->name}}</td>

                                <td style="color:#48BA48">
                                    {{$industrys->status}}
                                </td>

                                <td class="text-right" style="width: 10%;">
                                    <div class="action-btns d-flex justify-content-end">
                                        <a href="{{ route('get.editindustry',$industrys->id) }}" data-popup="tooltip"
                                            title="Edit" data-placement="bottom" class="mt-2"
                                            style="margin-right:5px;"><i class="fa fa-edit"></i></a>

                                        <input type="hidden" id="industry_id" value="{{ $industrys->id }}"/>
                                        
                                        <a href="javascript:void()" onclick="return deleteitem();" data-popup="tooltip"
                                            data-placement="bottom" class="mt-2" title="Delete"><i class="fa fa-trash"></i></a>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>   
<script>
    function deleteitem()
    {
        var id = $( "#industry_id" ).val();
        var url = '{{ route("industry.destroy", ":id") }}';
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
                                        'Industry has been deleted.',
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
                  swal("Cancelled", "Industry is safe :)", "error");
                }
            });
    }
</script>
@endsection

