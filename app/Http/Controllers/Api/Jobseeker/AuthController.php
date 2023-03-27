<?php

namespace App\Http\Controllers\Api\Jobseeker;

use App\Models\Candidate;
use App\Models\User;
use Validator;
use Hash;
use Session;
use JWTAuth;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    use ImageTrait;

    public function register(Request $request) 
    {
        $rules = array(
            'name'      => 'required|string|between:2,100',
            'email'     => 'required|string|email|max:100|unique:users,email',
            'mobile'    => 'required|integer|min:10|unique:users,mobile',
            'image'     => 'required'
        );
        $messages=array(
            'name.required'   => 'Name is required',
            'email.required'  => 'Email is required',
            'email.unique'    => 'The email has already been taken',
            'mobile.required' => 'mobile is required',
            'mobile.unique'   => 'The mobile has already been taken',
            'image.required'   => 'Image is required',
        );
        
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails())
        {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['message' => join(',', $errors)], 400);
        }
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile'=> $request->mobile,
                'otp'   => 0,
                'role' => "jobseeker",
                'status'=> "Active"
            ]);
            
            $candidate = new Candidate;
            $candidate->nextid();
            $candidate->user_id = $user->id;
            if ($request->hasFile('image')) {
                $getImage = $this->getTrait($request->image);
                $basePath = env('APP_URL');
                $candidate->image = $basePath . '/storage/uploads/' . $getImage;
            }
            $candidate->name = $request->name;
            $candidate->email = $request->email;
            $candidate->mobile = $request->mobile;
            $candidate->status = "Active";
            $candidate->save();
            

            return response()->json([
                'message' => 'Register Successfully',
                'user_id' => $user->_id
            ], 201);
    
        } catch (\Throwable $th) {
             echo $th;
            return response()->json([
                'message' => 'Error',
                'data' => $th
            ], 409);
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
    /*public function jobseekerlogin(Request $request){
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
                if ($auuserth->otp != $request->otp) {
                    return response()->json(['message' => 'Wrong otp'], 403);
                }
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
    protected function createNewToken($user)
    {
        $basepath = env('APP_URL');
        return response()->json([
             'access_token' => $user->remember_token,
             'user' => $user,
             'role'=>"jobseeker",
             'basepath' => $basepath
        ]);
    }*/
    public function jobseekerlogin(Request $request){
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
                if ($user->role == "jobseeker"){
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
        /*$validator = Validator::make($request->all(), [
            'id' => 'required|exists:users,_id'
        ]);

        if ($validator->fails()) {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['message' => join(',', $errors)], 400);
        }*/
        try {
            auth('api')->logout();
            return response()->json(['message' => 'Logout Successfull'], 201);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Error'], 400);
        }
    }
}
