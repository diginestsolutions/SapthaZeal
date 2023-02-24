@extends('layouts.Dashboard')
@section('content')

<div class="col-lg-10 col-md-12" id="main">

    <nav class="navbar navbar-light col-md-12 ">

        <h3 class=" mt-3  heading" style="">Industry Management</h3>


        <div class=" mt-12 pull-right">

            <div class="w-100">
                <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px;  padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:44px;      height: 44px;   border-radius: 28%;"
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

        <a class=" " href="" data-toggle="modal" data-target="#industryModal"> <span class="icons"> <i
                    class="fa fa-plus " aria-hidden="true"></i></span></a>
    </nav>
    <!--Table-->
    <div class=" col-md-12 ">
        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-resp-noscroll" id="dt-vertical-scroll">
                        <thead>
                            <tr>
                                <th>Industry ID</th>
                                <th>Industry Name</th>
                                <th>Actions</th>

                            </tr>
</thead>
                        <tbody>
                        @foreach ($industry as $industrys)
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
                            </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>




</div>
<!------------add notification-------------->
<div class="modal fade" id="industryModal" tabindex="-1" role="dialog" aria-labelledby="industryModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="industryModal">{{ __('Add Industry') }}</h5>
                <button type="button" class="close" onclick="return reset();" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle " style="    color: #FF0000;"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" action="{{ route('add.industry') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label">Industry Name</label>
                                <input type="text" class="form-control form-control-lg" name="name" required>
                            </div>
                        </div>
                    </div>
                 
                    <div class="form-group row ">
                        <div class="col text-center ">
                            <button type="submit" class="btn gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
letter-spacing: 1.25px;
border:none;
color: #FFFFFF;
text-transform: uppercase;
opacity: 1;

background-image: linear-gradient(to right,  #69DB65 51%, #208CD1 100%);
width: 100px;

;">
                                Add
                                <i class="icon-database-insert ml-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!------------Edit notification-------------->
<div class="modal fade" id="industryEditModal" tabindex="-1" role="dialog" aria-labelledby="industryEditModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="industryEditModal">{{ __('Edit Industry') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle " style="    color: #FF0000;"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerForm" action="{{ route('update.industry') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="industry_edit_id">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label">Industry Name</label>
                                <input type="text" class="form-control form-control-lg" id="industry_name" name="name" required>
                            </div>
                        </div>
                    </div>
                 
                    <div class="form-group row ">
                        <div class="col text-center ">
                            <button type="submit" class="btn gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
letter-spacing: 1.25px;
border:none;
color: #FFFFFF;
text-transform: uppercase;
opacity: 1;

background-image: linear-gradient(to right,  #69DB65 51%, #208CD1 100%);
width: 100px;

;">
                                Add
                                <i class="icon-database-insert ml-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>   
<script>
    function deleteitem(id)
    {
        var id = $(`#industry_id_${id}`).val();
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
                               
                                swal(
                                        'Failed!',
                                        data.message,
                                        'error'
                                      );
                            }
                            
                         });
                } 
                else {
                  swal("Cancelled", "Industry is safe :)", "error");
                }
                
            });
    }
</script>
<script>
    function edititem(id)
    {
        var id = $(`#industry_id_${id}`).val();
        var url = '{{ route("edit.industry", ":id") }}';
        url = url.replace(':id', id);
        if(id) {
            $.ajax({
                type:'get',
                url:url,
                success:function(data){
                    if(data.success==1)
                    {
                        $(`#industry_edit_id`).val(data.data._id);
                        $(`#industry_name`).val(data.data.name);
                        $('#industryEditModal').modal('show');
                    }
                }
            })
        }
    }
</script>
@endsection


<script>
    function reset() {
        $("#form").trigger('reset');
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
@extends('layouts.Dashboard')
@section('content')

<div class="col-lg-10 col-md-12" id="main">

    <nav class="navbar navbar-light col-md-12 ">

        <h3 class=" mt-3  heading" style="">Industry Management</h3>


        <div class=" mt-12 pull-right">

            <div class="w-100">
                <button class="btn " type="button"
                    style=" background-color:white;border:none;border-radius:21px; padding: 0px!important; "><img
                        class="user-avatar  pull-right" style="width:44px;       height: 44px;   border-radius: 28%;"
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

        <a class=" " href="" data-toggle="modal" data-target="#industryModal"> <span class="icons"> <i
                    class="fa fa-plus " aria-hidden="true"></i></span></a>
    </nav>
    <!--Table-->
    <div class=" col-md-12 ">
        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-resp-noscroll" id="dt-vertical-scroll">
                        <thead>
                            <tr>
                                <th>Industry ID</th>
                                <th>Industry Name</th>
                                <th>Actions</th>

                            </tr>
</thead>
                        <tbody>
                        @foreach ($industry as $industrys)
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
                            </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>




</div>
<!------------add notification-------------->
<div class="modal fade" id="industryModal" tabindex="-1" role="dialog" aria-labelledby="industryModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="industryModal">{{ __('Add Industry') }}</h5>
                <button type="button" class="close" onclick="return reset();" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle " style="    color: #FF0000;"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" action="{{ route('add.industry') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label">Industry Name</label>
                                <input type="text" class="form-control form-control-lg" name="name" required>
                            </div>
                        </div>
                    </div>
                 
                    <div class="form-group row ">
                        <div class="col text-center ">
                            <button type="submit" class="btn gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
letter-spacing: 1.25px;
border:none;
color: #FFFFFF;
text-transform: uppercase;
opacity: 1;

background-image: linear-gradient(to right,  #69DB65 51%, #208CD1 100%);
width: 100px;

;">
                                Add
                                <i class="icon-database-insert ml-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!------------Edit notification-------------->
<div class="modal fade" id="industryEditModal" tabindex="-1" role="dialog" aria-labelledby="industryEditModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="industryEditModal">{{ __('Edit Industry') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle " style="    color: #FF0000;"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerForm" action="{{ route('update.industry') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="industry_edit_id">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label">Industry Name</label>
                                <input type="text" class="form-control form-control-lg" id="industry_name" name="name" required>
                            </div>
                        </div>
                    </div>
                 
                    <div class="form-group row ">
                        <div class="col text-center ">
                            <button type="submit" class="btn gradient-button gradient-button-1" style="font: normal normal100 20px/31px Quicksand;
letter-spacing: 1.25px;
border:none;
color: #FFFFFF;
text-transform: uppercase;
opacity: 1;

background-image: linear-gradient(to right,  #69DB65 51%, #208CD1 100%);
width: 100px;

;">
                                Add
                                <i class="icon-database-insert ml-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>   
<script>
    function deleteitem(id)
    {
        var id = $(`#industry_id_${id}`).val();
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
                               
                                swal(
                                        'Failed!',
                                        data.message,
                                        'error'
                                      );
                            }
                            
                         });
                } 
                else {
                  swal("Cancelled", "Industry is safe :)", "error");
                }
                
            });
    }
</script>
<script>
    function edititem(id)
    {
        var id = $(`#industry_id_${id}`).val();
        var url = '{{ route("edit.industry", ":id") }}';
        url = url.replace(':id', id);
        if(id) {
            $.ajax({
                type:'get',
                url:url,
                success:function(data){
                    if(data.success==1)
                    {
                        $(`#industry_edit_id`).val(data.data._id);
                        $(`#industry_name`).val(data.data.name);
                        $('#industryEditModal').modal('show');
                    }
                }
            })
        }
    }
</script>
@endsection


<script>
    function reset() {
        $("#form").trigger('reset');
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
