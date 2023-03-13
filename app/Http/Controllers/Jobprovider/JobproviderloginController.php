<?php

namespace App\Http\Controllers\Jobprovider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobprovider;
use App\Models\Industry;
use App\Models\User;
use App\Models\Subscription;
use Auth;
use Validator;
use Carbon\Carbon;



class JobproviderLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobprovider/login');
    }
    public function otp()
    {
        return view('jobprovider/otp');
    }
    public function register()
    {
        $items =Industry::all(['_id', 'name']);
        return view('jobprovider/registration',compact('items'));
    }
   
    public function dashboard()
    {
        return view('jobprovider/dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addregister(Request $request)
    {
       
      # Validate Data
        
      $request->validate([
        'name'       => 'required|string|',
        'email'      => 'required|string|email|max:100|unique:users',
        'mobile'     => 'required|integer|unique:users',
        'designation'=> 'required|string|',
    ]);
  
    try {
           
            $user = new User();
            $user->nextid();		
            $user->name 	= $request->name;
            $user->email	= $request->email;
            $user->mobile	= $request->mobile;
            $user->role     = "jobprovider";
            $user->status   ="Saved";
            $user->save();
            $provider                       = new JobProvider;
            $provider->nextid();
            $provider->user_id              = $user->id;
            $provider->name                 = $request->name;
            $provider->email                = $request->email;
            $provider->mobile               = $request->mobile;
            $provider->company_name         = $request->company_name;
            $provider->designation          = $request->designation;
            $provider->jobindustry          = $request->jobindustry;
            $provider->address              = $request->address;
            $provider->city                 = $request->city;
            $provider->state                = $request->state;
            $provider->country              = $request->country;
            $provider->address              = $request->address;
            $provider->subscriptionplan     = $request->subscriptionplan;
            $provider->duration             = $request->duration;
            $provider->payment_status       = $request->payment_status;
            if(str_contains($request->duration, "Month")){
                $date = str_replace("Month","",$request->duration); 
                $newDateTime = Carbon::now()->addMonths($date)->format('Y-m-d');
            }else{
                $date = str_replace("Year","",$request->duration);
                $newDateTime = Carbon::now()->addYear($date)->format('Y-m-d');
            }
            $provider->planexpiry_date = $newDateTime;
            $provider->payment_status = $request->payment_status;
            $provider->status = "Saved";
            $provider->save();
            $provider->provider_id    = $provider->jobprovider_id;
            $provider->save();
            $response['success']=1;
            $response['message'] ='Provider inserted successfully';
            $response['jobprovider_id']=$provider->id;
            return $response;
        }catch (\Exception $e) {
            print($e);exit;
            return back()->withErrors(['message' => 'Failed to add candidate']);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
