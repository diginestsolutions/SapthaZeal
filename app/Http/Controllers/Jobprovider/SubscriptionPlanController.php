<?php

namespace App\Http\Controllers\Jobprovider;

use App\Models\JobProvider;
use App\Models\Order;
use App\Models\Subscription;
use Auth;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriptionPlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:jobprovider');
    }
    public function dosubscription(Request $request)
    {
        $userId = Auth::guard('jobprovider')->user()->id;
        $provider = JobProvider::where('user_id',$userId)->first();
        if($provider)
        {
            $provider->subscriptionplan = $request->subscription;   
            $provider->duration = $request->plan;  
            if(str_contains($request->plan, "month")){
                $date = str_replace("month","",$request->plan); 
                $newDateTime = Carbon::now()->addMonths($date)->format('Y-m-d');
            }else{
                $date = str_replace("year","",$request->plan);
                $newDateTime = Carbon::now()->addYear($date)->format('Y-m-d');
            }
            $provider->planexpiry_date = $newDateTime;
            $provider->payment_status = "Pending";
            $provider->save();

            $order = new Order();
            $order->nextid();
            $order->provider_id = $provider->id;
            $order->subscriptionplan = $request->subscription; 
            $order->payment_status = "Pending";  
            $order->planexpiry_date = $newDateTime;
            $order->transaction_id = "";
            $order->status = "Active";
            $order->save();
            $response['success'] = 1;
            $response['message'] ='Subscription Plan Choosed Successfully';
        }else {
            $response['success'] = 0;
            $response['message'] ='Job provider Not Found';
        }
        return $response;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::guard('jobprovider')->user()->id;
        $jobprovider = JobProvider::where('user_id',$userid)->first();
        $subscription = Subscription::all();
        return view('jobprovider/edit_subscription')->with(['subscription'=>$subscription,'jobprovider'=>$jobprovider]);
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
    public function store(Request $request)
    {
        //
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
