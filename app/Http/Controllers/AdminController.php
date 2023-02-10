<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Industry;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Admin/dashboard');
    }
    public function dashboard1(){

        return view('Admin/dashboard1');
    }
    public function addjob(){
        $items =Industry::all(['_id', 'name']);

        return view('Admin/addjob',compact('items'));
    }
    public function createjob(Request $request){
      
       try{
           
            $job                      = new Job;
            $job->nextid();
            $job->jobcategory               = $request->jobcategory;
            $job->jobname                   = $request->jobname;
            $job->openings                  = $request->openings;
            $job->jobdescription            = $request->jobdescription;
            $job->skills                    = $request->skills;
         
            $job->experienceyears           =$request->years ."years";
            $job->experiencemonths          =$request->months ."months";
            $job->salary                    = $request->salary;
            $job->expirydate                =$request->expirydate;
            $job->joblocation               =$request->joblocation;
            $items =Industry::all(['_id', 'name']);
            $job->jobcategory              =$request->jobcategory;
            
            $job->save();
            $job->job_id          = $job->job_id;
            $job->save();
       }
      
        catch (\Exception $e) {
            //echo $e;
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update subscription'
            ], 400);
        }
          
        
       return view('Admin/addjob',compact('items'));
           
      

    
    }
   
    public function viewjob(){
        $job = Job::orderBy('_id', 'ASC')->get();
      
        return view('Admin/job',array('job'=>$job));

    }
    public function show(){
        
        $items =Industry::all(['_id', 'name']);
        return view('Admin/viewjob',compact('items'));

    }


}
