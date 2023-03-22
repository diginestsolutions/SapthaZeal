<?php

namespace App\Http\Controllers\Api\Jobprovider;
use App\Models\User;
use App\Models\Job;
use App\Http\Traits\ImageTrait;
use Validator;
use Hash;
use Session;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    use ImageTrait;

    public function add_job(Request $request){

        $validator = Validator::make($request->all(), [
           'job_category'     => 'required',
           'job_name'         => 'required',
           'experience_years' => 'required',
           'experience_months'=> 'required',
           'job_location'     => 'required',
           'job_description'  => 'required',
           'salary'           => 'required',
           'skills'           => 'required',
           'job_industry'     => 'required'

        ]);

        if ($validator->fails()) {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['message' => join(',', $errors)], 400);
        }

        try{
            $job = new Job;
            $job->nextid();
            $job->jobprovider     = $request->id;
            $job->jobproviderrole = "jobprovider";
            $job->jobcategory     = $request->job_category;
            $job->jobname         = $request->job_name;
            $job->experienceyears = $request->experience_years;
            $job->experiencemonths= $request->experience_months;
            $job->openings        = $request->openings;
            $job->joblocation     = $request->job_location;
            $job->jobdescription  = $request->job_description;
            $job->salary          = $request->salary;
            $job->skills          = $request->skills;
            $job->expirydate      = $request->expiry_date;
            $job->jobindustry     = $request->job_industry;
            $job->status          = "Saved";
            $job->save();
            return response()->json([
                'status' => 201,
                'message' => 'Job Created Successfully',
            ], 201); 
        }
        catch (\Exception $th) {
            echo $th;
            return response()->json([
                'status'  => false,
                'message' => 'Failed to Create Job',
                'data' => $th
            ], 400);
        }
    }
}
