<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Industry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 


class JobController extends Controller
{
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
         
            $job->experienceyears           =$request->years;
            $job->experiencemonths          =$request->months;
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
   

    public function show(){
        
        $items =Industry::all(['_id', 'name']);
        return view('Admin/viewjob',compact('items'));

    }
    public function edit(){
        
        $items =Industry::all(['_id', 'name']);
        return view('Admin/editjob',compact('items'));

    }


}
