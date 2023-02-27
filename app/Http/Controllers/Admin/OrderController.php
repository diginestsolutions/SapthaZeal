<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jobprovider;
use App\Models\Order;
use App\Models\Subscription;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
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
        $order = Order::with('subscription:id,name','jobprovider:id,jobprovider_id,mobile')->get();
        return view('Admin/Order', compact('order'));
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
        $order = Order::with('subscription:id,name','jobprovider:id,jobprovider_id,mobile')->find($id);
        return view('Admin/vieworder', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subs = Subscription::get();
        $order = Order::with('subscription:id,name','jobprovider:id,jobprovider_id,mobile')->find($id);
        return view('Admin/editorder', compact('order','subs'));
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
            $order = Order::find($id);
            if($order)
            {
                $order->provider_id = $order->provider_id;
                $order->subscriptionplan = $request->subscriptionplan; 
                $order->duration = $request->duration;
                if(str_contains($request->duration, "month")){
                    $date = str_replace("month","",$request->duration); 
                    $newDateTime = Carbon::now()->addMonths($date)->format('Y-m-d');
                }else{
                    $date = str_replace("year","",$request->duration);
                    $newDateTime = Carbon::now()->addYear($date)->format('Y-m-d');
                }
                $order->payment_status = $request->payment_status;  
                $order->planexpiry_date = $newDateTime;
                $order->save();

                $provider = JobProvider::find($order->provider_id);
                if($provider)
                {
                    $provider->subscriptionplan = $request->subscriptionplan;   
                    $provider->duration = $request->duration;  
                    $provider->planexpiry_date = $newDateTime;
                    $provider->payment_status = $request->payment_status;
                    $provider->save();
                }
            }
            return redirect()->route('view.order')->with('success', 'Provider edited successfully.'); 
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
}
