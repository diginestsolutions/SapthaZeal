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
    .table{
        background-color:#CDE5FF;
        opacity:0.8;
    }
    tr {
        height: 82px !important;
    }
</style>
<body>
<h3 class=" heading  my-5" style=""> <a class="btn mr-2 " href="{{ route('jobprovider.job') }}"><span class="icon2">
    <button class="btn-back" style="border-radius:50%;border:none; background-color:#4CB848; padding:10px;"><span class="left" style="color:white">
    <i class="fa-solid fa-chevron-left"></i></span></button></i></a>View Job Post</h3>
    <div class="card  " style="border-radius:15px;margin-top:72px">
        <div class="card-body ">
            <div class="table-responsive ">
                <table class="table mt-3 table-bordered">
                    <tbody>
                        <tr>
                            <td>Job ID : #{{ $job->job_id}}</td>
                            <td>Created Date : {{ $job->created_at->format('d-m-Y')}}</td>
                            <td>Status : 
                                @if($job->status =='Saved')  
                                    <span style="color:#e37b11">
                                    Pending
                                    </span>
                                @endif
                                @if($job->status =='Active') 
                                    <span style="color:#48BA48">
                                        Approved
                                    </span>
                                @endif
                                @if($job->status =='Inactive') 
                                    <span style="color:red">
                                        Rejected
                                    </span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Interested Candidates : {{ $job->interested_candidate_count}}</td>
                            <td>Shortlisted Resumes : {{ $job->shortlisted_resumes_count}}</td>
                            <td><span style="background-color:#3FEB00;opacity:0.55;border-radius:5px">Interview Scheduled : {{ $job->interview_scheduled_count}}</span></td>
                        </tr>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@endsection
