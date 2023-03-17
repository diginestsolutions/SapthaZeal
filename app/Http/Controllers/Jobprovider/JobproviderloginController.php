<?php

namespace App\Http\Controllers\Jobprovider;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\JobProvider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Industry;

use App\Models\User;
use App\Models\Subscription;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


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
    public function generateotp(Request $request)
    {
        //dd($request);
        # Validate Data
        $request->validate(
            [
                'mobile' => 'required|exists:users,mobile'
            ],
            [
                'mobile.required' => 'The selected Phone Number is invalid'   
            ]
        );
        $code = random_int(1000, 9999);
     
        $users = User::where('mobile', $request->mobile)->first();
        if($users){
            if($users->role == "jobprovider")
            {
                $users->otp = 1234;
                $users->save();

                $response['success'] = 1;
                $response['message'] ='Send Otp Successfully';
                $response['mobile'] = $users->mobile;
            }else {
                $response['success'] = 0;
                $response['message'] ='Job provider Not Found';
            }
        }
        return $response;
    }
    public function otp()
    {
        return view('jobprovider/otp');
    }
    public function otplogin(Request $request)
    {
        $request->validate(
            [
                'mobile' => 'required|exists:users,mobile',
                'otp'   => 'required'
            ]
        );
        $otp_digits = implode(' ', array_values($request->otp));
        $otp = str_replace(' ','',$otp_digits);
       
        $user = User::where('mobile', 'LIKE','%'.$request->mobile.'%')->where('otp',(int)$otp)->where('role','jobprovider')->first();
        if($user != null){
            if($user->status=="Active"){
                Auth::guard('jobprovider')->login($user);
                $provider = JobProvider::where('user_id',Auth::guard('jobprovider')->user()->id)->first();
                if($provider->subscriptionplan != null && $provider->planexpiry_date >= Carbon::now()->format('Y-m-d'))
                {
                    return redirect()->route('jobprovider.job');
                }
                $subscription = Subscription::all();
                return view('jobprovider.subscriptionplan')->with(['userid'=>$user->id,'subscription'=>$subscription]);
            }
           else{
                return redirect('otp')->with('error', 'User looks like Inactive');
            }
        }
        else {
            return redirect('otp')->with('error', 'Your OTP is not correct');
        }  
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
            $user->designation= $request->designation;
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
            $provider->pincode              = $request->pincode;
           
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
