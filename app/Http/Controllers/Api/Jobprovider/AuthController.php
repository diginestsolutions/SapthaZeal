<?php

namespace App\Http\Controllers\Api\Jobprovider;

use App\Models\User;
use App\Models\JobProvider;
use App\Models\Industry;
use App\Models\Subscription;
use App\Models\Order;
use App\Http\Traits\ImageTrait;
use Validator;
use Hash;
use JWTAuth;
use Session;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ImageTrait;

    public function getallindustry()
    {
        try{
            $industries = Industry::all();
            return response()->json([
                'status' => 200,
                'message' => 'Success',
                'industries'=>$industries
            ], 200);
        }catch (\Throwable $th) {
            echo $th;
           return response()->json([
               'status' => 400,
               'message' => 'Error',
               'data' => $th
           ], 400);
       }
    }
    public function register(Request $request) 
    {
        $rules = array(
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users,email',
            'mobile' => 'required|integer|min:10|unique:users,mobile',
            'designation' => 'required'
        );
        $messages=array(
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'The email has already been taken',
            'mobile.required' => 'mobile is required',
            'mobile.unique' => 'The mobile has already been taken',
            'designation.required' => 'Designation is required',
        );
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails())
        {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['status'=> 400,'message' => join(',', $errors)], 400);
        }
        try {
            $user = new User();
            $user->nextid();		
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->company_name = $request->company_name;
            $user->otp = 0;
            $user->role = "jobprovider";
            $user->designation= $request->designation;
            $user->status = "Active";
            $user->save();
            
            $job_provider = new JobProvider;
            $job_provider->nextid();
            $job_provider->user_id = $user->id;
            $job_provider->name = $request->name;
            $job_provider->email = $request->email;
            $job_provider->mobile = $request->mobile;
            $job_provider->company_name = $request->company_name;
            $job_provider->designation = $request->designation;
            $job_provider->image = $request->image;
            if ($request->hasFile('image')) {
                $getImage = $this->getTrait($request->image);
                $basePath = env('APP_URL');
                $job_provider->image = $basePath . '/storage/uploads/' . $getImage;
            }
            $job_provider->jobindustry = $request->jobindustry;
            $job_provider->address = $request->address;
            $job_provider->city = $request->city;
            $job_provider->state = $request->state;
            $job_provider->country = $request->country;
            $job_provider->pincode = $request->pincode;
            $job_provider->notification_status = 'on';
            $job_provider->status = "Saved";
            $job_provider->save();

            return response()->json([
                'status' => 201,
                'message' => 'Register Successfully',
            ], 201);
        } catch (\Throwable $th) {
            echo $th;
           return response()->json([
               'status' => 400,
               'message' => 'Error',
               'data' => $th
           ], 400);
       }
    }
    public function loginotp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|exists:users,mobile',
        ]);
  
        if ($validator->fails()) {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['status'=> 400,'message' => join(',', $errors)], 400);
        }
        try {
            $otp = 1234;
            $auth = User::where('mobile', $request->mobile)->first();
            $job_provider = JobProvider::where('user_id',$auth->id)->first();
            if($job_provider->status == 'Active')
            {
                $auth->otp = $otp;
                $auth->save();
                return response()->json(['status'=> 201,'message' => 'Otp Sent','user_id'=>$auth->id], 201);
            }
            if($job_provider->status == 'Saved')
                return response()->json(['status'=> 400,'message' => 'User looks like inactive, you can login after admin approval'], 400);
            if($job_provider->status == 'Inactive')
                return response()->json(['status'=> 400,'message' => 'User looks like inactive'], 400);
        } catch (\Throwable $th) {
           return response()->json(['status'=> 400,'message' => 'Error'], 400);
        }
    }
    public function jobproviderlogin(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:users,_id',
            'otp'    => 'required',
        ]);

        if ($validator->fails()) {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['status'=> 400,'message' => join(',', $errors)], 400);
        }
        $user = User::find($request->id);
        try {
            if($user != null){
                if ($user->role == "jobprovider"){
                    if ($user->otp != $request->otp) {
                        return response()->json(['message' => 'Wrong otp'], 403);
                    }
                    if (!$userToken=JWTAuth::fromUser($user)) {
                        return response()->json(['message' => 'invalid_credentials'], 401);
                    }
                    $token = $this->respondWithToken($userToken);
                    $otoken = $token->original;
                    $userData = array(
                        'accessToken' => $otoken['access_token'], 
                        'userData' => $user
                    );
                    return response()->json(['message' => "Success", 'data' => $userData], 200); 
                }
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->guard('api')->factory()->getTTL() * 60
        ]);
    }
    public function resendotp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|exists:users,mobile',
        ]);
  
        if ($validator->fails()) {
              $messages=$validator->messages();
              $errors=$messages->all();
              return response()->json(['message' => join(',', $errors)], 400);
        }
        try {
            $otp = 1234;
            $auth = User::where('mobile', $request->mobile)->first();
            $auth->otp = $otp;
            $auth->save();

            return response()->json(['message' => 'otp Sent'], 201);
        } catch (\Throwable $th) {
           return response()->json(['message' => 'Error'], 400);
        }
    }
    public function logout(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:users,_id'
        ]);

        if ($validator->fails()) {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['message' => join(',', $errors)], 400);
        }
        try {
            $user = User::find($request->id);
            if ($user){
                $user->remember_token = null;
                $user->save();
                return response()->json(['message' => 'Logout Successfull'], 201);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error'], 400);
        }
    }
    public function getallsubscription()
    {
        try{
            $subscription = Subscription::all();
            return response()->json([
                'status' => 200,
                'message' => 'Success',
                'subscriptions'=>$subscription
            ], 200);
        }catch (\Throwable $th) {
            echo $th;
           return response()->json([
               'status' => 400,
               'message' => 'Error',
               'data' => $th
           ], 400);
       }
    }
    public function dosubscription(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:users,_id'
        ]);

        if ($validator->fails()) {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['status' => 400, 'message' => join(',', $errors)], 400);
        }
        try {
            $provider = JobProvider::where('user_id',$request->id)->first();
            if($provider)
            {
                $provider->subscriptionplan = $request->subscription_id;   
                $provider->duration = $request->duration;  
                if(str_contains($request->plan, "month")){
                    $date = str_replace("month","",$request->plan); 
                    $newDateTime = Carbon::now()->addMonths($date)->format('Y-m-d');
                }else{
                    $date = str_replace("Year","",$request->plan);
                    $newDateTime = Carbon::now()->addYear($date)->format('Y-m-d');
                }
                $provider->planexpiry_date = $newDateTime;
                $provider->payment_status = "Pending";
                $provider->save();
    
                $order = new Order();
                $order->nextid();
                $order->provider_id = $provider->id;
                $order->subscriptionplan = $request->subscription_id; 
                $order->payment_status = "Pending";  
                $order->planexpiry_date = $newDateTime;
                $order->transaction_id = "";
                $order->status = "Active";
                $order->save();
                return response()->json([
                    'status' => 201,                                                                        
                    'message' => 'Success'
                ], 201);
            } else {
                return response()->json(['status' => 400, 'message' => 'Provider not found'], 400);   
            }
        } catch (\Throwable $th) {
            return response()->json(['status' => 400, 'message' => 'Error'], 400);
        }
    }
}
