<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['jobseekerlogin','createNewToken','loginotp']]);
    }
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
        $auth = User::find($request->id);
        
        if ($auth->role ="jobseeker"){

            /*if ($auth->otp != $request->otp) {
                return response()->json(['message' => 'Wrong otp'], 403);
            }
            Auth::logout($auth);*/
            if (! $token = Auth::login($auth)) {
                //print_r(auth()->user());exit;
                return response()->json(['message' => 'Unauthorized'], 403);
            }
            if(auth()->user()->role != "jobseeker"){
                return response()->json(['message' => 'You are not authorized'], 403);
            }
            $auth->otp = null;
            $auth->save();
        }
        

        return $this->createNewToken($token);
            
    }
    //jobseeker login
    /*public function jobseekerlogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
             'mobile' => 'required|exists:users,mobile',
             'otp'    => 'required',
         ]);
 
         if ($validator->fails()) {
             $messages=$validator->messages();
             $errors=$messages->all();
             return response()->json(['message' => join(',', $errors)], 400);
         }
         $user = User::where('mobile', $request->mobile)->where('role', 'jobseeker')->first();
         
         if($user == null){
            return response()->json(['message' => 'Unauthorized'], 403);
         }else {
            $token = $user->createToken('myapptokens')->plainTextToken;
         }
        dd($token);
         if ($auth->loginotp != $request->otp) {
           return response()->json(['message' => 'Wrong otp'], 403);
         }
         if (! $token = \Auth::login($auth)) {
             return response()->json(['message' => 'Unauthorized'], 403);
         }
         if(auth()->user()->role != "patient"){
             return response()->json(['message' => 'You are not authorized'], 403);
         }
         $auth->loginotp = null;
         $auth->save();
 
         return $this->createToken($token);
    }*/
    
    public function loginotp(Request $request)
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
    }
    protected function createNewToken($token)
    {
         $basepath = env('APP_URL');
         return response()->json([
             'access_token' => $token,
             'token_type' => 'bearer',
             'expires_in' => auth()->factory()->getTTL() * 60,
             'user' => auth()->user(),
             'role'=>"jobseeker",
             'basepath' => $basepath
         ]);
    }
    
}
