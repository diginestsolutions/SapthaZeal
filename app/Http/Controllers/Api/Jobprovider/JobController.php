<?php

namespace App\Http\Controllers\Api\Jobprovider;

use App\Models\User;
use App\Models\Job;
use App\Models\JobAppliedDetails;
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
    public function addjob(Request $request){

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
            return response()->json(['status'=> 400,'message' => join(',', $errors)], 400);
        }
        try{
            $job = new Job;
            $job->nextid();
            $job->jobprovider = $request->id;
            $job->jobproviderrole = "jobprovider";
            $job->jobcategory = $request->job_category;
            $job->jobname = $request->job_name;
            $job->experienceyears = $request->experience_years;
            $job->experiencemonths= $request->experience_months;
            $job->openings = $request->openings;
            $job->joblocation = $request->job_location;
            $job->jobdescription = $request->job_description;
            $job->salary = $request->salary;
            $job->skills = $request->skills;
            $job->expirydate = $request->expiry_date;
            $job->jobindustry = $request->job_industry;
            $job->status = "Saved";
            $job->save();
            return response()->json([
                'status' => 201,
                'message' => 'Job Created Successfully',
                'job'     => $job
            ], 201); 
        }
        catch (\Exception $th) {
            echo $th;
            return response()->json([
                'status'  => 400,
                'message' => 'Failed to Create Job',
                'data' => $th
            ], 400);
        }
    }
    public function updatejob(Request $request){
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
             return response()->json(['status'=> 400,'message' => join(',', $errors)], 400);
         }
         try{
                $job = Job::find($request->job_id);
                if($job){
                    $job->jobcategory = $request->job_category;
                    $job->jobname = $request->job_name;
                    $job->experienceyears = $request->experience_years;
                    $job->experiencemonths= $request->experience_months;
                    $job->openings = $request->openings;
                    $job->joblocation = $request->job_location;
                    $job->jobdescription = $request->job_description;
                    $job->salary = $request->salary;
                    $job->skills = $request->skills;
                    $job->expirydate = $request->expiry_date;
                    $job->jobindustry = $request->job_industry;
                    $job->save();
                    return response()->json([
                        'status' => 201,
                        'message' => 'Job Updated Successfully',
                        'job'     => $job
                    ], 201); 
                }
                else{
                    return response()->json([
                        'status'  => 400,
                        'message' => 'Failed to Update Job',
                    ], 400);
                }
            }
            catch (\Exception $e) {
                 echo $th;
                return response()->json([
                    'status'  => 400,
                    'message' => 'Failed to update job',
                    'data'    =>  $th
                ], 400);
            }
        }
    public function deletejob(Request $request){
  
        $job = Job::find($request->job_id);
        if($job){
            $job->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Job Deleted Successfully',
            ], 200); 
        }
        else{
            return response()->json([
                'status'  => 400,
                'message' => 'Job Not Exist'
            ], 400);
        }
    }    
    public function joblist($id)
    {
        $jobs = Job::where('jobprovider',$id)->get();
        if($jobs)
        {
            foreach($jobs as $job)
            {
                if($job->expirydate < Carbon::today())
                {
                    $job->status = "Closed";
                }else{
                    if($job->status == "Saved")
                    {
                        $job->status = "Under Review";
                    }
                    if($job->status == "Active")
                    {
                        $job->status = "Active";
                    }
                    if($job->status == "Inactive")
                    {
                        $job->status = "Inactive";
                    }
                }
            }
            return response()->json([
                'status'=>201,
                'message' => 'Success',
                'job' => $jobs,
            ], 201);
        }else{
            return response()->json([
                'status'=>400,
                'message' => 'Jobs Not Found',
               ], 400);
        }
    }
    public function jobdetails($jobid,$id)
    {
        $job_details = Job::find($jobid);
        if($job_details != null){
            $job_details->interested_candidate_count = JobAppliedDetails::where('job_id',$job_details->id)->where('applied_status','interested')->count();
            $job_details->shortlisted_resumes_count = JobAppliedDetails::where('job_id',$job_details->id)->where('applied_status','scheduled_resumes')->count();
            $job_details->interview_scheduled_count = JobAppliedDetails::where('job_id',$job_details->id)->where('applied_status','interview_scheduled')->count();
            $job_details->negotiation_count = JobAppliedDetails::where('job_id',$job_details->id)->where('applied_status','negotiation')->count();
            return response()->json([
                'status'=>201,
                'message' => 'Success',
                'job_details' => $job_details,
            ], 201);
        }
        else{
            return response()->json([
                'status'=>400,
                'message' => 'Jobs Not Found',
               ], 400);
        }
    }
}
