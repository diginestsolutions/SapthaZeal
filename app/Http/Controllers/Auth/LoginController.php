<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Job;
use Auth;
use Validator;
class LoginController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
       return view('auth/login');
    }

    public function getotp(){
       
        return view('auth/getotp');
    }
    /**
     * Generate otp
     *
     * @return \Illuminate\Http\Response
     */
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

        return view('auth/getotp',array('mobile' => $users->phone));
 
     }
     public function dashboard(){
        return view('layouts/Dashboard');
     }

     /**
     * Verify otp
     *
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request){
        $request->validate([
            'phone' => 'required|exists:users,phone',
            'otp' => 'required'
        ]);
        
        $otp_digits = implode(' ', array_values($request->otp));
        $otp  =  str_replace(' ','',$otp_digits);
       
        $user = User::where('phone', 'LIKE','%'.$request->phone.'%')->where('otp',(int)$otp)->first();

        if($user){
            Auth::login($user);
            $job = Job::orderBy('_id', 'ASC')->get();
            return view('Admin/job')->with(['name'=>$user->name,'job'=>$job]);
        }else {
            return redirect()->route('get.login')->with('error', 'Your OTP is not correct');
        }          
    }
    public function logout(Request $request) {
        Auth::logout();
        return view('auth/login');
      }
}