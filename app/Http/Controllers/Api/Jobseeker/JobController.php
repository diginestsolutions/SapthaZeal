<?php

namespace App\Http\Controllers\Api\Jobseeker;

use App\Models\Job;
use App\Models\JobSavedDetails;
use App\Models\JobAppliedDetails;
use App\Models\Candidate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

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
    public function savejobs(Request $request)
    {
        $rules = array(
            'job_id'     => 'required',
            'candidate_id'    => 'required'
        );
        $messages=array(
            'job_id.required'  => 'Email is required',
            'candidate_id.required' => 'mobile is required'
        );
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails())
        {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['message' => join(',', $errors)], 400);
        }
        try {
            $saved_jobs = JobSavedDetails::where('job_id',$request->job_id)->where('candidate_id',$request->candidateid)->first();
            if($saved_jobs != null){
                $job_saved_details = new JobSavedDetails();
                $job_saved_details->nextid();
                $job_saved_details->job_id = $request->job_id;
                $job_saved_details->candidate_id = $request->candidate_id;
                $job_saved_details->status = 'Active';
                $job_saved_details->save();
                return response()->json([
                    'message' => 'Job Saved Successfully',
                ], 201);
            }else {
                return response()->json([
                    'message' => 'Job Already Saved',
                ], 201);
            }
        } catch (\Throwable $th) {
            echo $th;
            return response()->json([
                'message' => 'Error',
                'data' => $th
            ], 409);
        }
    }
    public function savedjobslist($candidateid)
    {
        $saved_jobs = JobSavedDetails::with('Job')->where('candidate_id',$candidateid)->get();
        if($saved_jobs != null){
            return response()->json([
                'message' => 'Success',
                'data' => $saved_jobs
            ], 201);
        }
        else{
            return response()->json([
                'message' => 'Error',
               ], 400);
        }
    }
    public function appliedjobs(Request $request)
    {
        $rules = array(
            'job_id' => 'required',
            'candidate_id' => 'required'
        );
        $messages=array(
            'job_id.required'  => 'Email is required',
            'candidate_id.required' => 'mobile is required'
        );
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails())
        {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['message' => join(',', $errors)], 400);
        }
        try {
            $saved_jobs = JobAppliedDetails::where('job_id',$request->job_id)->where('candidate_id',$request->candidateid)->first();
            if($saved_jobs == null){
                $job_applied_details = new JobAppliedDetails();
                $job_applied_details->nextid();
                $job_applied_details->job_id = $request->job_id;
                $job_applied_details->candidate_id = $request->candidate_id;
                $job_applied_details->applied_status = 'scheduled_resumes';
                $job_applied_details->candidate_status = 'applied';
                $job_applied_details->save();

                $candidate = Candidate::find($request->candidate_id);
                if($candidate)
                {
                    $candidate->cover_letter = $request->cover_letter;
                    if ($request->hasFile('file')) {
                        $filename = time().'.'.$request->resume->getClientOriginalExtension();
                        $filePath = storage_path('app/public/uploads/resumes/'); 
                        $request->resume->move($filePath, $filename);

                        $basePath = env('APP_URL');
                        $candidate->resume = $basePath . '/storage/uploads/resumes/' . $filename;
                    }
                    $candidate->save();
                }

                return response()->json([
                    'message' => 'Job Applied Successfully',
                ], 201);
            }else {
                return response()->json([
                    'message' => 'Job Already Applied',
                ], 201);
            }
        } catch (\Throwable $th) {
            echo $th;
            return response()->json([
                'message' => 'Error',
                'data' => $th
            ], 409);
        }
    }
    public function appliedjobslist($candidateid)
    {
        $applied_jobs = JobAppliedDetails::with('Job')->where('candidate_id',$candidateid)->get();
        if($applied_jobs != null){
            return response()->json([
                'message' => 'Success',
                'data' => $applied_jobs
            ], 201);
        }
        else{
            return response()->json([
                'message' => 'Error',
               ], 400);
        }
    }
}
