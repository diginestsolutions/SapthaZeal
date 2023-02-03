<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Job;
use Auth;
class LoginController extends Controller
{
  
    public function index(){

        return view('auth/login');
    }
    public function getotp(){
       
        return view('auth/getotp');
    }
    
   
     public function generate(Request $request)
     {
         # Validate Data
         $request->validate([
             'phone' => 'required|exists:users,phone'
         ]);
         $code = random_int(1000, 9999);
     
         $users = User::where('phone', $request->phone)->first();
         $users->otp = 1234;
         $users->save();
         $mobile= $users->phone;
         
         return view('auth/getotp',array('mobile' => $mobile));
 
     }
     public function dashboard(){
        return view('layouts/Dashboard');
     }

    public function verify(Request $request){
        $request->validate([
            'phone' => 'required|exists:users,phone',
            'otp' => 'required'
        ]);
        //return $request->all();
      
        $links = implode(' ', array_values($request->otp));
        $link  =  str_replace(' ','',$links);
       
        $user = User::where('phone', 'LIKE','%'.$request->phone.'%')->where('otp',(int)$link)->first();
        // return $user;
        if (!$user) {

            return redirect()->route('get.login')->with('error', 'Your OTP is not correct');
        }
        
            Auth::login($user);
            $job = Job::orderBy('_id', 'ASC')->get();
            return view('Admin/job')->with(['name'=>$user->name,'job'=>$job]);
        
    }
    public function logout(Request $request) {
        Auth::logout();
        return view('auth/login');
      }
}