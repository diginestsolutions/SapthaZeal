<?php

namespace App\Http\Controllers\Api\Jobseeker;

use App\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobdetails($jobid)
    {
        $job_details = Job::find($jobid);
        if($job_details != null){
            return response()->json([
                'message' => 'Success',
                'job_details' => $job_details,
            ], 201);
        }
        else{
            return response()->json([
                'message' => 'Job Not Found',
               ], 400);
        }
    }
}
