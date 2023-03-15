<?php

namespace App\Http\Controllers\Jobprovider;

use App\Models\Job;
use App\Models\JobAppliedDetails;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProviderJobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:jobprovider');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::guard('jobprovider')->user()->id;
        $jobs = Job::where('jobprovider',$userId)->get();
        return view('jobprovider/job',compact('jobs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobprovider/add_job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $job = new Job;
            $job->nextid();
            $job->jobprovider = auth()->user()->id;
            $job->jobproviderrole = "jobprovider";
            $job->jobcategory = $request->category;
            $job->jobname = $request->name;
            $job->openings = $request->opening;
            $job->jobdescription = $request->description;
            $job->skills = $request->skill;
            $job->experienceyears =$request->min;
            $job->experiencemonths =$request->max;
            $job->salary = $request->salary;
            $job->expirydate =$request->expirydate;
            $job->joblocation =$request->job_location;
            $job->jobindustry =$request->jobindustry;
            $job->status = "Saved";
            $job->save();
            return redirect()->route('jobprovider.job')->with('success', 'Job created successfully.'); 
        }
        catch (\Exception $e) {
            //echo $e;
            return response()->json([
                'status'  => false,
                'message' => 'Failed to Add job'
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        $job->interested_candidate_count = JobAppliedDetails::where('job_id',$job->id)->where('applied_status','interested')->count();
        $job->shortlisted_resumes_count = JobAppliedDetails::where('job_id',$job->id)->where('applied_status','scheduled_resumes')->count();
        $job->interview_scheduled_count = JobAppliedDetails::where('job_id',$job->id)->where('applied_status','interview_scheduled')->count();
        return view('jobprovider/view_job',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs = Job::find($id);
        return view('jobprovider/edit_job',compact('jobs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $job = Job::find($request->id);
            $job->jobcategory = $request->jobcategory;
            $job->jobname = $request->jobname;
            $job->openings = $request->openings;
            $job->jobdescription = $request->jobdescription;
            $job->skills = $request->skill;
            $job->experienceyears =$request->years;
            $job->experiencemonths =$request->months;
            $job->salary = $request->salary;
            $job->expirydate =$request->expirydate;
            $job->joblocation =$request->joblocation;
            $job->jobindustry =$request->jobindustry;
            $job->save();
            return redirect()->route('jobprovider.job')->with('success', 'Job updated successfully.'); 
        }
        catch (\Exception $e) {
            //echo $e;
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update job'
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job=Job::find($id);
        $response=array();
        $response['success']=0;
        $response['message'] ='';
        if($job)
        {
            $status = $job->delete();
            $response['success']=1;
            $response['message'] ='Delete Success';
            
        }
        else
        {
            $response['success'] = 0;
            $response['message'] = 'Data not Exist';
        }
        return response()->json($response); 
    }
}
