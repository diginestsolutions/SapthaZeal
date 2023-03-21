<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Subscription;
use Validator;

class SubscriptionController extends Controller
{
    //
    // public function __construct() {
    //     $this->middleware('auth:api', ['except' => ['login', 'register']]);
    // }

   

  
    

    public function Create(Request $request)
    {
        # code...
        $validator = Validator::make($request->all(), [
            'period'                   => 'required|string',
            'maximumjobpost'           => 'required|string',
            'cvsperpost'               => 'required|',
            'amount'                   => 'required|string',
            
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        try {
            //code...

            $subscriptionplan                   = new Subscription;
            $subscriptionplan->name             = $request->name;
            $subscriptionplan->period           = str_split($request->period,6);
            $subscriptionplan->maximumjobpost   = $request->maximumjobpost;
            $subscriptionplan->cvsperpost       = $request->cvsperpost;
            $subscriptionplan->amount           = $request->amount;
            $subscriptionplan->ext1months       = $request->ext1months;
            $subscriptionplan->nooftimes        = $request->nooftimes;
            $subscriptionplan->expiry_date      = $request->expiry_date;
            $subscriptionplan->status           = 'Active';
            $subscriptionplan->save();
        } catch (\Exception $e) {
            //echo $e;
            return response()->json([
                'status'  => false,
                'message' => 'Failed to add subscription plan'
            ], 400);
        }
        return response()->json([
            'message' => 'Subscription plan  Created Successfully',
            'subscriptionplan' => $subscriptionplan
        ], 201);
    }

    public function Edit(Request $request)
    {
        # code...
        $validator = Validator::make($request->all(), [
            'id'                       => 'required|string',
            'period'                   => 'required|string',
            'amount'                   => 'required|string',
            'expiry_date'              => 'required|string'   
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        try {
            //code...
            $subscriptionplan  = Subscriptionplan::find($request->id);
            $current = Carbon::now();
            if($subscriptionplan ->expiry_date < $current){
                //$data = $request->all();
                $data['name']           = $request->name;
                $data['period']         = $request->period;
                $data['maximumjobpost'] = $request->maximumjobpost;
                $data['amount']         = $request->amount;
                 $subscriptionplan->update($data,['upsert' => true]);
                
            }
        } catch (\Exception $e) {
            //echo $e;
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update subscription'
            ], 400);
        }

        return response()->json([
            'message' => 'Subscription updated Successfully',
            'subscriptionplan' => $subscriptionplan
        ], 201);

        
    }

    public function Delete($id)
    {
        # code...
        $subscriptionplan = Subscriptionplan::find($id);
        if($subscriptionplan != null){
            $subscriptionplan->delete();
            return response()->json([
                'message' => 'Subscription plan Deleted'
            ], 201);
        }
        else{
            return response()->json([
                'status'  => false,
                'message' => 'No subscriptionplan found for the given ID'
            ], 400);
        }
    }
}
