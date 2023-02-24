<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use Validator;

class AuthController extends Controller
{
    
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('auth:api', ['except' => ['login', 'register','loginotp',]]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request){

     
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (! $token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        return $this->createNewToken($token);
    }

    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request) {

        $validator = Validator::make($request->all(), [
            'name'       => 'required|string|between:2,100',
            'email'      => 'required|string|email|max:100|unique:users',
           // 'password'   => 'required|string|min:6',
            'phone'     => 'required|integer|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users',
            'image'      => 'required|mimetypes:image/jpeg,image/jpg,image/png',
            'designation'=> 'required|string|',
            'role'       => 'required|string|',
           
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        // return $request->all();
        $code = random_int(1000, 9999);
       
   
        $user = new User();
	    $user->name 	= $request->name;
        $user->email	= $request->email;
        $user->phone	= $request->phone;
        $user->password = bcrypt($request->password);
        $user->otp 	    = 1234;
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $destinationPath = storage_path('app/public/uploads/');
            $file = $request->file('image')->move($destinationPath,$filename);
            
            $basePath = env('APP_URL');

            $user['image'] = $basePath . 'storage/uploads/' . $filename;
        }
        $user->designation	    = $request->designation;   
        $user->role             = $request->role;   
        $user->status           = "Active";  
        $user->save(); 
        

        return response()->json([
            'message' => 'User successfully registered',
            'data' => $user
        ], 201);

    }
   
    public function loginotp(Request $request){

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
        
       if ($auth->role ="Admin"){

            if ($auth->otp != $request->otp) {
            return response()->json(['message' => 'Wrong otp'], 403);
            }
            if (! $token = Auth::login($auth)) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }
            if(auth()->user()->role != "Admin"){
                return response()->json(['message' => 'You are not authorized'], 403);
            }
            $auth->otp = null;
            $auth->save();
        }
        

        return $this->createNewToken($token);
            
    }

    public function otp1(Request $request){

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
        
       if ($auth->role ="jobprovider"){

            if ($auth->otp != $request->otp) {
            return response()->json(['message' => 'Wrong otp'], 403);
            }
            if (! $token = Auth::login($auth)) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }
            if(auth()->user()->role != "jobprovider"){
                return response()->json(['message' => 'You are not authorized'], 403);
            }
            $auth->otp = null;
            $auth->save();
        }
        

        return $this->createNewToken($token);
            
    }

    public function otp2(Request $request){

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

            if ($auth->otp != $request->otp) {
            return response()->json(['message' => 'Wrong otp'], 403);
            }
            if (! $token = Auth::login($auth)) {
                return response()->json(['message' => 'Unauthorized'], 403);
            }
            if(auth()->user()->role != "jobseeker"){
                return response()->json(['message' => 'You are not authorized'], 403);
            }
            $auth->otp = null;
            $auth->save();
        }
        

      
            
    }




  
    public function logout() {
        auth()->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh() {
        return $this->createNewToken(auth()->refresh());
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile() {

        return response()->json(auth()->user());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
   
}
