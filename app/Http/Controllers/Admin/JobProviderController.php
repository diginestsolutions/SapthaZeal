<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jobprovider;
use App\Models\Industry;
use App\Models\User;
use App\Models\Subscription;
use App\Models\Order;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class JobProviderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = JobProvider::with('user')->get();

        return view('Admin/jobprovider',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items =Industry::all(['_id', 'name']);
        $subs = Subscription::get();

        return view('Admin/Addjobprovider',compact('items','subs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required|string|',
            'email'      => 'required|string|email|max:100|unique:users',
            'phone'      =>  'required|integer|unique:users',
           
           
        ]);

        if($validator->fails()) {
            return redirect('admin/jobprovider')->with('error', 'Jobprovider already Exists.');
        }
        else{

        try{
            $user = new User();
            $user->nextid();		
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->role = "jobprovider";
            $user->status= "Active";
            $user->company_name=$request->company_name;
            $user->save();

            if($user->id)   
            {
                $provider = new JobProvider;
                $provider->nextid();
                $provider->user_id = $user->id;
                $provider->name = $request->name;
                $provider->email = $request->email;
                $provider->mobile = $request->mobile;
                $provider->designation = $request->designation;
                $provider->company_name = $request->company_name;
                $provider->jobindustry  = $request->jobindustry;
                $provider->address = $request->address;
                $provider->subscriptionplan = $request->subscriptionplan;   
                $provider->duration = $request->duration;  
                if(str_contains($request->duration, "Month")){
                    $date = str_replace("Month","",$request->duration); 
                    $newDateTime = Carbon::now()->addMonths($date)->format('Y-m-d');
                }else{
                    $date = str_replace("Year","",$request->duration);
                    $newDateTime = Carbon::now()->addYear($date)->format('Y-m-d');
                }
                $provider->planexpiry_date = $newDateTime;
                $provider->payment_status = $request->payment_status;
                $provider->status = "Active";
                $provider->save();

                $order = new Order();
                $order->nextid();
                $order->provider_id = $provider->id;
                $order->subscriptionplan = $request->subscriptionplan; 
                $order->payment_status = $request->payment_status;  
                $order->planexpiry_date = $newDateTime;
                $order->transaction_id = "";
                $order->status = "Active";
                $order->save();

                return redirect()->route('view.jobprovider')->with('success', 'Provider created successfully.'); 
            }
        }catch (\Exception $e) {
            return back()->withErrors(['message' => 'Failed to create Provider']);
        }  
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
        $subs = Subscription::get();
        $provider = JobProvider::with('subscription:id,name')->find($id);
        return view('Admin/viewjobprovider', compact('provider','subs')); 
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
        $subs = Subscription::get();

        $provider = JobProvider::find($id);
        return view('Admin/editjobprovider', compact('provider','items','subs'));
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
            $provider = JobProvider::find($id);
            $provider->company_name = $request->company_name;
            $provider->designation = $request->designation;
            $provider->jobindustry = $request->jobindustry;
            $provider->address = $request->address;
        
            $provider->subscriptionplan = $request->subscriptionplan;
            $provider->duration = $request->duration;
            if(str_contains($request->duration, "Month")){
                $date = str_replace("Month","",$request->duration); 
                $newDateTime = Carbon::now()->addMonths($date)->format('Y-m-d');
            }else{
                $date = str_replace("Year","",$request->duration);
                $newDateTime = Carbon::now()->addYear($date)->format('Y-m-d');
            }
            $provider->planexpiry_date      = $newDateTime;
            $provider->payment_status       = $request->payment_status;
            $provider->save();

            $user = User::findOrFail($provider->user_id);
            $user->nextid();		
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->company_name=$request->company_name;
            $user->save();

            $order = new Order();
            $order->nextid();
            $order->provider_id = $provider->id;
            $order->subscriptionplan = $request->subscriptionplan; 
            $order->payment_status = $request->payment_status;  
            $order->planexpiry_date = $newDateTime;
            $order->transaction_id = "";
            $order->status = "Active";
            $order->save();

            return redirect()->route('view.jobprovider')->with('success', 'Provider edited successfully.'); 
        }catch (\Exception $e) {
            return back()->withErrors(['message' => 'Failed to edited provider']);
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
        //
    }

    public function getCategory($id)
    {
        //$data = Subscription::where('_id',$id)->get();
        $data = Subscription::find($id);

        \Log::info($data);
        return response()->json(['data' => $data]);
    }
    public function statusapproved($id)
    {
        $provider = JobProvider::findOrFail($id);
        $response=array();
        $response['success']=0;
        $response['message'] ='';
        if($provider){
            $provider->status = "Active";
            $provider->save();

            $user = User::findOrFail($provider->user_id);
            if($user) {
                $user->status= "Active";
                $user->save();

                $response['success']=1;
                $response['message'] ='Approve Success';
            }else{
                $response['success'] = 0;
                $response['message'] = 'User Not Found';
            }
        }else{
            $response['success'] = 0;
            $response['message'] = 'Job provider not exist';
        }
        return response()->json($response);
    }
    public function statusrejected($id)
    {
        $provider = JobProvider::findOrFail($id);
        $response=array();
        $response['success']=0;
        $response['message'] ='';
        if($provider){
            $provider->status = "Inactive";
            $provider->save();

            $user = User::findOrFail($provider->user_id);
            if($user) {
                $user->status= "Inactive";
                $user->save();

                $response['success']=1;
                $response['message'] ='Rejected Success';
            }else{
                $response['success'] = 0;
                $response['message'] = 'User Not Found';
            }
        }else{
            $response['success'] = 0;
            $response['message'] = 'Job provider not exist';
        }
        return response()->json($response);
    }
}
