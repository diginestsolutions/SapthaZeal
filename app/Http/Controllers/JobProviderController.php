<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobprovider;
use App\Models\Industry;
use App\Models\User;
use App\Models\Subscription;
use Auth;
use Carbon\Carbon;

class JobProviderController extends Controller
{
    public function jobprovider(){
        
        $results = JobProvider::with('user')->get();

        return view('Admin/jobprovider',compact('results'));
    }
    public function addjobprovider(Request $request){

       
        $user = new User();
        $user->nextid();		
        $user->name 	= $request->name;
        $user->email	= $request->email;
        $user->mobile	= $request->mobile;
        
        $user->role     ="jobprovider";
        $user->status     ="Approved";
       
        $user->save();  

           

            $provider                       = new JobProvider;
            $provider->nextid();
            $provider->user_id              = $user->id;
            $provider->company_name         = $request->company_name;
        
            $provider->designation          = $request->designation;
            $provider->jobindustry          = $request->jobindustry;
            $provider->address              = $request->address;
          
            $provider->subscriptionplan     = $request->subscriptionplan;
            $provider->duration             = $request->duration;
            if(str_contains($request->duration, "month")){
            $date                           = str_replace("month","",$request->duration);
            
            $newDateTime                    = Carbon::now()->addMonths($date)->format('Y-m-d');
           
            }
           else{
            $date                           = str_replace("year","",$request->duration);
            $newDateTime                    = Carbon::now()->addYear($date)->format('Y-m-d');
           }
          
            $provider->planexpiry_date      = $newDateTime;
            $provider->payment_status       = $request->payment_status;
            $provider->status               = $request->status;
            $provider->save();
            $provider->provider_id          = $provider->jobprovider_id;
            $provider->save();
            
            return redirect()->route('view.jobprovider');
       
        
       
    }
    
    
    public function jobprovider1(){
         $items =Industry::all(['_id', 'name']);
         $subs = Subscription::get();

         return view('Admin/Addjobprovider',compact('items','subs'));

       
}
public function getCategory($id)
{
    $data = Subscription::where('_id',$id)->get();

    \Log::info($data);
    return response()->json(['data' => $data]);
}
public function edit($id)
{
    $items =Industry::all(['_id', 'name']);
    $subs = Subscription::get();

    $provider = JobProvider::with('user')->find($id);
    return view('Admin/editjobprovider', compact('provider','items','subs')); 
}
public function update(Request $request,$id)
{
  
    $provider = JobProvider::with('user')->find($id);
   
    $provider->company_name         = $request->company_name;
   
    $provider->designation          = $request->designation;
    $provider->jobindustry          = $request->jobindustry;
    $provider->address              = $request->address;
  
    $provider->subscriptionplan     = $request->subscriptionplan;
    $provider->duration             = $request->duration;
    if(str_contains($request->duration, "month")){
        $date                           = str_replace("month","",$request->duration);
        
        $newDateTime                    = Carbon::now()->addMonths($date)->format('Y-m-d');
       
        }
       else{
        $date                           = str_replace("year","",$request->duration);
        $newDateTime                    = Carbon::now()->addYear($date)->format('Y-m-d');
       }
      
        $provider->planexpiry_date      = $newDateTime;
        $provider->payment_status       = $request->payment_status;

    if($provider!= null){
        $data      = $request->all();
        $provider->update($data);
 
      
    }

    return redirect()->route('view.jobprovider',compact('provider'));
}


}
