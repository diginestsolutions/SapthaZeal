@extends('layouts.Dashboard')
@section('content')
<style>
    .form-control {
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;
        height: 40px !important;
        font-size: 15px;
        font-family: 'Quicksand';
    }

    .form-control1 {
        border-radius: 16px !important;
        opacity: 1 !important;
        box-shadow: 0px 3px 6px #0000000d;
        border: none !important;
        width: 450px;
        padding: 3px;
        font-size: 15px;
        font-family: 'Quicksand';

    }

    .select-sup::after {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 31px;
        content: "\f13a";
        position: absolute;
        right: -12px;
        bottom: 15px;
        padding: 0 1em;
        color: #7ECD7C;
        pointer-events: none;
    }

    .form-control[readonly] {
        background-color: white !important;
        opacity: 1;
    }

</style>
<div class="col-lg-10  col-md-12" id="main">
    <nav class="navbar navbar-light col-md-12 ">
        <h3 class=" mt-3  heading" style="">Notifications</h3>
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
    <nav class="navbar navbar-light ">

        <a class=" " href="" data-toggle="modal" data-target="#registerModal"> <span class="icons"> <i
                    class="fa fa-plus " aria-hidden="true"></i></span></a>
    </nav>
    <br/>
    <!--Table-->
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
    <div class=" col-md-12 ">
        <div class="card  col-lg-12 col-md-12" style="border-radius:15px;">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-resp-noscroll" id="dt-vertical-scroll">
                        <thead>
                            <tr>
                                <th>Created Date & Time</th>
                                <th>User Name</th>
                                <th>User Type</th>
                                <th>Heading</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                       
                        <tbody>
                        @foreach ($result as $noti)
                            <tr>
                                <td>{{ $noti->created_at}}</td>
                                <td>{{Auth::user()->name}}</td>
                                <td>{{ $noti->usertype}}</td>
                                <td>{{ $noti->heading}}</td>
                                <td class="">
                                    <div class="action-btns ">
                                        <a href="javascript:void()" onclick="return showsms({{$noti->not_id}});"
                                            data-popup="tooltip" title="View" data-toggle="modal"
                                            style="margin-right:5px;" class="mt-2"><i class="fa fa-eye"></i></a>
                                        <input type="hidden" id="not_id" value="{{ $noti->id }}" />
                                        <input type="hidden" id="not_id_{{$noti->not_id}}" value="{{ $noti->id }}" />
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
<!------------add notification-------------->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('Add Notification') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle " style="    color: #FF0000;"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerForm" action="{{ route('add.notification') }}" method="POST"
                    enctype="multipart/form-data">

                    @csrf
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                            <div class=" form-group select-sup">
                                <label class="title-label">User Type</label>
                                <select class="form-control select " name="usertype" required>
                                    <option value="">Choose Usertype</option>
                                    <option value="jobseeker">Job seekers</option>
                                    <option value="jobprovider">Job providers</option>
                                    <!--@foreach($users as $user)
                                    <option value="{{$user->role}}">{{$user->role}}</option>
                                    @endforeach-->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label">Heading</label>
                                <input type="text" class="form-control1 form-control-lg" name="heading" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12">
                            <div class=" form-group">
                                <label class="title-label">Description</label>
                                <textarea rows="4" class="form-control1" name="description" required></textarea>
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
<!------------view notification-------------->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius:15px;">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModal">{{ __('View Notification') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times-circle " style="    color: #FF0000;"></i></span>
                </button>
            </div>
            <div class="modal-body">

                <input type="hidden" name="id" id="not_edit_id">

                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-6 col-lg-4 col-md-4 col-sm-12">
                        <div class=" form-group">
                            <label class="title-label">User Type</label>
                            <input type="text" class="form-control form-control-lg" name="heading" id="usertype"
                                readonly>
                            <!--<select class="form-control select " name="usertype" id="usertype" required readonly>
                                <option value="">Choose Usertype</option>
                                <option value="jobseeker">Job seekers</option>
                                <option value="jobprovider">Job providers</option>
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->role}}</option>
                                @endforeach
                            </select>-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12">
                        <div class=" form-group">
                            <label class="title-label">Heading</label>
                            <input type="text" class="form-control form-control-lg" name="heading" id="heading"
                                readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-4 col-md-4 col-sm-12">
                        <div class=" form-group">
                            <label class="title-label">Description</label>
                            <textarea rows="4" class="form-control1" name="description" id="description"
                                readonly></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
<script>
    function showsms(id) {

        var id = $(`#not_id_${id}`).val();

        var url = '{{ route("show.notification", ":id") }}';
        url = url.replace(':id', id);
        console.log(id);

        if (id) {
            $.ajax({
                type: 'get',
                url: url,
                success: function (data) {
                    if (data.success == 1) {
                        $('#not_edit_id').val(data.data._id);
                        if(data.data.usertype == 'jobseeker')
                            $('#usertype').val("Job seekers");
                        else
                            $('#usertype').val("Job providers");
                        $('#heading').val(data.data.heading);
                        $('#description').val(data.data.description);
                        $('#editModal').modal('show');
                    }

                }
            })
        }
    }

</script>


@endsection
