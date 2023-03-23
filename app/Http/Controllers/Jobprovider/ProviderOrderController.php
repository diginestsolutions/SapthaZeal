<?php

namespace App\Http\Controllers\Jobprovider;

use App\Models\Order;
use App\Models\Jobprovider;
use Auth;
use PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProviderOrderController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth:jobprovider');
    }

    public function index()
    {
        $userId = Auth::guard('jobprovider')->user()->id;
        $providerId= Jobprovider::where('user_id',$userId)->first();
        $orders = Order::with('subscription')->where('provider_id',$providerId->id)->get();
        return view('jobprovider/order',compact('orders'));
    }
    public function download_invoice($id)
    {
        $order = Order::with('jobprovider','subscription')->find($id); 
        $pdf = PDF::loadView('includes.invoice_template',array('order'=>$order));
        return $pdf->download('Invoice.pdf');
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
