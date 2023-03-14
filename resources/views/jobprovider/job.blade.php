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

</style>
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

<body>
  <h3 class="  heading my-5" style=""> Job Management <a class="addbutton" class="btn" href="{{ route('jobprovider.jobadd') }}"> <span
                class="icons"> <i class="fa fa-plus " aria-hidden="true"></i></span>ADD</a></h3>
    <div class="card  " style="border-radius:15px;margin-top:72px">
        <div class="card-body ">
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
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@endsection
