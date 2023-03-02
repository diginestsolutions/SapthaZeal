<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Str;
use Session;

class AuthController extends Controller
{
   /* public function __construct() {
        $this->middleware('auth:api', ['except' => ['jobseekerlogin','createNewToken','loginotp']]);
    }*/
    public function jobseekerlogin(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:users,_id',
            'otp'    => 'required',
        ]);

        if ($validator->fails()) {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['message' => join(',', $errors)], 400);
        }
        try {
            $user = User::find($request->id);
            if ($user->role ="jobseeker"){
                /*if ($auuserth->otp != $request->otp) {
                    return response()->json(['message' => 'Wrong otp'], 403);
                }*/
                $token = Str::random(60);
                $user->remember_token = hash('sha256', $token);
                $user->save();
                            
                \Session::put('token', $user->remember_token);
                \Session::save();
                Auth::guard('jobseeker')->login($user);
                
                if (Auth::guard('jobseeker')->login($user)) {
                    return response()->json(['message' => 'Unauthorized'], 403);
                }
            }
            return $this->createNewToken($user);
        } catch (\Throwable $th) {
            echo $th;
        } 
    }
       
    /*public function loginotp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required|exists:users,mobile',
            'role' => 'required',
        ]);
 
        if ($validator->fails()) {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['message' => join(',', $errors)], 400);
        }
        try {
            $otp = 1234;
            $auth = User::where('mobile', 'like', $request->mobile)->where('role', 'like', $request->role)->first();
            if($auth != null){
                $auth->loginotp = $otp;
                $auth->save();
                return response()->json(['message' => 'otp Sent'], 201);
            }
            else{
                return response()->json(['message' => 'No data found'], 400);
            }
        } catch (\Throwable $th) {
          echo $th;
        }
    }*/
    protected function createNewToken($user)
    {
        $basepath = env('APP_URL');
        return response()->json([
             'access_token' => $user->remember_token,
             'token_type' => 'bearer',
             'user' => $user,
             'role'=>"jobseeker",
             'basepath' => $basepath
        ]);
    }
    
}
