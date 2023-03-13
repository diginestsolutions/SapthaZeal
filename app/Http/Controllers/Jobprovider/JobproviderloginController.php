<?php

namespace App\Http\Controllers\Jobprovider;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class JobproviderLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobprovider/login');
    }
    public function generateotp(Request $request)
    {
        //dd($request);
        # Validate Data
        $request->validate(
            [
                'mobile' => 'required|exists:users,mobile'
            ],
            [
                'mobile.required' => 'The selected Phone Number is invalid'   
            ]
        );
        $code = random_int(1000, 9999);
     
        $users = User::where('mobile', $request->mobile)->first();
        if($users){
            if($users->role == "jobprovider")
            {
                $users->otp = 1234;
                $users->save();

                $response['success'] = 1;
                $response['message'] ='Send Otp Successfully';
                $response['mobile'] = $users->mobile;
            }else {
                $response['success'] = 0;
                $response['message'] ='Job provider Not Found';
            }
        }
        return $response;
    }
    public function otp()
    {
        return view('jobprovider/otp');
    }
    public function otplogin(Request $request)
    {
        $request->validate(
            [
                'mobile' => 'required|exists:users,mobile',
                'otp'   => 'required'
            ]
        );
        $otp_digits = implode(' ', array_values($request->otp));
        $otp = str_replace(' ','',$otp_digits);
       
        $user = User::where('mobile', 'LIKE','%'.$request->mobile.'%')->where('otp',(int)$otp)->where('role','jobprovider')->first();
        if($user != null){
            if($user->status=="Active"){
                \Auth::guard('jobprovider')->login($user);
                return view('jobprovider.job')->with(['name'=>$user->name]);
            }
           else{
                return redirect('otp')->with('error', 'User looks like Inactive');
            }
        }
        else {
            return redirect('otp')->with('error', 'Your OTP is not correct');
        }  
    }
    public function register()
    {
        return view('jobprovider/registration');
    }
    public function addregister()
    {
        
        return view('jobprovider/registration');
    }
    public function dashboard()
    {
        return view('jobprovider/dashboard');
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
