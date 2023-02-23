<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use App\Models\Industry;
use App\Models\JobAppliedDetails;
use App\Models\Candidate;
use App\Models\Message;
use App\Http\Controllers\Controller;
use Excel;
use PDF;
use Auth;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = Job::orderBy('_id', 'ASC')->get();
        return view('Admin/job',array('job'=>$job));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items =Industry::all(['_id', 'name']);
        return view('Admin/addjob',compact('items'));
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
            $job->jobprovider = auth()->user()->name;
            $job->jobproviderrole = "admin";
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
            $job->status = "Active";
            $job->save();
            return redirect()->route('view.job')->with('success', 'Job created successfully.'); 
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::with('industry:id,name')->find($id);
        return view('Admin/viewjob',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items =Industry::all(['_id', 'name']);
        $jobs = Job::find($id);
        return view('Admin/editjob',compact('items','jobs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
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
            return redirect()->route('view.job')->with('success', 'Job updated successfully.'); 
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
    /**
     * job status approval
     */
    public function statusapproved($id)
    {
        $job = Job::findOrFail($id);;
        $response=array();
        $response['success']=0;
        $response['message'] ='';
        if($job){
            $job->status = "Active";
            $job->save();
            $response['success']=1;
            $response['message'] ='Approve Success';
        }else{
            $response['success'] = 0;
            $response['message'] = 'Job not exist';
        }
        return response()->json($response);
    }
    /**
     * Job status rejection
     */
    public function statusrejected($id)
    {
        $job = Job::findOrFail($id);;
        $response=array();
        $response['success']=0;
        $response['message'] ='';
        if($job){
            $job->status = "Inactive";
            $job->save();
            $response['success']=1;
            $response['message'] ='Rejected Success';
        }else{
            $response['success'] = 0;
            $response['message'] = 'Job not exist';
        }
        return response()->json($response);
    }
    public function jobresponse($id)
    {
        $job_response = JobAppliedDetails::with('job','candidate')->where('applied_status','interested')->where('job_id',$id)->get();
        $job_id = $id;
        return view('Admin/viewresponse',compact('job_response','job_id'));
    }
    public function responsestatuslist(Request $request,$id)
    {
        if($id == 1) {
            $job_response = JobAppliedDetails::with('job','candidate')->where('applied_status','interested')
                            ->where('job_id',$request->job_id)->get();
        }
        if($id == 2) {
            $job_response = JobAppliedDetails::with('job','candidate')->where('applied_status','scheduled_resumes')
                            ->where('job_id',$request->job_id)->get();
        }
        if($id == 3) {
            $job_response = JobAppliedDetails::with('job','candidate')->where('applied_status','interview_scheduled')
                            ->where('job_id',$request->job_id)->get();
        }
        if($id == 4) {
            $job_response = JobAppliedDetails::with('job','candidate')->where('applied_status','negotiation')
                            ->where('job_id',$request->job_id)->get();
        }
        if($id == 5) {
            $job_response = JobAppliedDetails::with('job','candidate')->where('applied_status','hired')
                            ->where('job_id',$request->job_id)->get();
        }
        $response['success']=1;
        $response['data']=  $job_response;
        return $response;
    }
    public function responsecandidate($id)
    {
        $candidate = Candidate::with('candidate_education','candidate_experience')->where('candidate_id',(int)$id)->first();
        return view('Admin/jobseeker',compact('candidate'));
    }
    public function candidatechatbox($id)
    {
        $candidate_id = Candidate::where('candidate_id',(int)$id)->first()->id;
        $message = Message::where('candidate_id',$candidate_id)->where('admin_id',Auth::user()->id)->get();
        return view('Admin/viewchat',compact('candidate_id','message'));
    }
    public function sendmessage(Request $request)
    {
        try{
            $message = new Message();
            $message->candidate_id = $request->candidate_id;
            $message->admin_id = $request->admin_id;
            $message->message = $request->message;
            $message->send_by = "admin";
            $message->status = "Active";
            $message->save();
            return redirect()->back()->with('success', 'Message added successfully.'); 
        }
        catch (\Exception $e) {
            //echo $e;
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update job'
            ], 400);
        }
    }
    /*public function pdf($id) {
        $member_list = Candidate::find($id);
                 ->get();
        $total_counts = DB::table('member')->where('agent_code',$agent_code)
          ->select(DB::raw('SUM(total_balance) AS grand_total_balance'), DB::raw('SUM(total_profit) AS grand_total_profit'))->get();
        $agent = Agent::where('agent_code',$agent_code)->first();
        
        $data = [
            'member_list' => $member_list,
            'total_counts' => $total_counts,
            'agent' => $agent
        ];
        $pdf = PDF::loadView('hotline.pdf.memberlist', $data);
        
        return $pdf->download('MemberList.pdf');
    }*/
}
