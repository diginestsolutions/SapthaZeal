<?php

namespace App\Http\Controllers\Api\Jobprovider;

use App\Models\Job;
use App\Models\JobAppliedDetails;
use App\Models\JobProvider;
use App\Models\User;
use App\Models\Notification;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home($id)
    {
        $jobs = Job::with('job_applied_details')->where('user_id',$id)->get();
        if($jobs != null){
            $interested_candidate_count = 0;
            $shortlisted_resumes_count = 0;
            $interview_scheduled_count = 0;
            foreach($jobs as $job)
            {
                $interested_candidate_count = $interested_candidate_count + JobAppliedDetails::where('job_id',$job->id)->where('applied_status','interested')->count();
                $shortlisted_resumes_count =  $shortlisted_resumes_count + JobAppliedDetails::where('job_id',$job->id)->where('applied_status','scheduled_resumes')->count();
                $interview_scheduled_count =  $interview_scheduled_count + JobAppliedDetails::where('job_id',$job->id)->where('applied_status','interview_scheduled')->count();
            }
            return response()->json([
                'status'=>200,
                'message' => 'Success',
                'interested_candidate_count' => $interested_candidate_count,
                'shortlisted_resumes_count' => $shortlisted_resumes_count,
                'interview_scheduled_count' => $interview_scheduled_count,
                'job_list' => $jobs
            ], 200);
        }
        else{
            return response()->json([
                'status'=>400,
                'message' => 'No Jobs Found',
            ], 400);
        }
    }
    public function profile($id)
    {
        $provider = JobProvider::where('user_id',$id)->first();
        if($provider != null){
            return response()->json([
                'status'=>200,
                'message' => 'Success',
                'data' => $provider
            ], 200);
        }
        else{
            return response()->json([
                'status'=>400,
                'message' => 'Provider Not Found',
            ], 400);
        }
    }
    public function editprofile(Request $request)
    {
        $rules = array(
            'name'     => 'required',
            'mobile'    => 'required|integer|min:10'
        );
        $messages=array(
            'name.required'  => 'Name is required',
            'mobile.required' => 'mobile is required'
        );
        
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails())
        {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['status'=>400,'message' => join(',', $errors)], 400);
        }
        try {
            $user = User::find($request->id);
            if($user) {
                $user->name = $request->name;
                $user->mobile = $request->mobile;
                $user->save();

                $provider = JobProvider::where('user_id',$request->id)->first();
                if($provider)
                {
                    $provider->name = $request->name;
                    $provider->mobile = $request->mobile;
                    $provider->address = $request->address;
                    $provider->save();

                    return response()->json([
                        'status'=>200,
                        'message' => 'Success',
                        'data' => $provider
                    ], 200);
                } else {
                    return response()->json([
                        'status'=>400,
                        'message' => 'Provider Not Found',
                    ], 400);
                }
            }else {
                return response()->json([
                    'status'=>400,
                    'message' => 'User Not Found',
                ], 400);
            }
        } catch (\Throwable $th) {
            echo $th;
            return response()->json([
                'status'=>400,
                'message' => 'Error',
                'data' => $th
            ], 400);
        }
    }
    public function changestatus(Request $request)
    {
        $rules = array(
            'notification_status' => 'required'
        );
        $messages=array(
            'notification_status.required'  => 'Notification is required'
        );
        
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails())
        {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['status'=>400,'message' => join(',', $errors)], 400);
        }
        try {
            $provider = JobProvider::where('user_id',$request->id)->first();
            if($provider)
            {
                $provider->notification_status = $request->notification_status;
                $provider->save();

                return response()->json([
                    'status'=>200,
                    'message' => 'Success',
                    'data' => $provider
                ], 200);
            } else {
                return response()->json([
                    'status'=>400,
                    'message' => 'Provider Not Found',
                ], 400);
            }
        } catch (\Throwable $th) {
            echo $th;
            return response()->json([
                'status'=>400,
                'message' => 'Error',
                'data' => $th
            ], 400);
        }
    }
    public function notifications(Request $request){
        try {
            $provider = JobProvider::where('user_id',$request->id)->first();
            if($provider->notification_status == "on")
            {
                $notification = Notification::where('usertype', '=', 'jobprovider')->get(); 
            
                return response()->json([
                    'status'=>200,
                    'message' => 'Success',
                    'data' => $notification
                ], 200);
            }
            else {
                return response()->json([
                    'status'=>400,
                    'message' => 'Please Enable Your Status',
                ], 400);
            }
        } catch (\Throwable $th) {
            echo $th;
            return response()->json([
                'status'=>400,
                'message' => 'Error',
                'data' => $th
            ], 400);
        }
    }

    }

