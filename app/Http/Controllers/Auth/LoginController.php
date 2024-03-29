<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Job;
use Auth;
use Carbon\Carbon;
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
            'phone' => 'required|exists:users,phone'],
            [
             'phone.required' => 'The selected Phone Number is invalid'
              
            ]
        );
       
        $code = random_int(1000, 9999);
     
        $users = User::where('phone', $request->phone)->first();
        if($users){
        $users->otp = 1234;
        $users->save();
        }

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
            'otp'   => 'required'
        ]
        
        );
        
        $otp_digits =  implode(' ', array_values($request->otp));
        $otp        =  str_replace(' ','',$otp_digits);
        $user = User::where('phone', 'LIKE','%'.$request->phone.'%')->where('otp',(int)$otp)->first();
        $now = Carbon::now();
        $user->last_login_in = $now->format(' d-m-Y h:i a');
        if($user != null){
            if($user->status=="Active"){
                Auth::guard('admin')->login($user);
                return redirect()->route('view.job');
            }
           else{
            return redirect('auth/getlogin')->with('error', 'User looks like Inactive');

        }
    }
        else {
            return redirect('auth/getlogin')->with('error', 'Your OTP is not correct');
        }          
    }
    public function logout(Request $request) {
        Auth::guard('admin')->logout();//Auth::logout();
        return redirect()->route('get.login');
      }
}