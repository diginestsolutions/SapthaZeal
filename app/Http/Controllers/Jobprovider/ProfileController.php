<?php

namespace App\Http\Controllers\Jobprovider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Auth;
use App\Models\Jobprovider;
use App\Models\Industry;
use App\Models\User;
use App\Models\Subscription;
use Validator;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:jobprovider');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
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
    
        public function edit()
        {
            $items =Industry::all(['_id', 'name']);
            $id=Auth::guard('jobprovider')->user()->id;
            if($id){
            $provider = Jobprovider::with('subscription:id,name')->where('user_id', $id)->first();
            }
           return view ('jobprovider/profile',compact('provider','items'));
           
            
        }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $items =Industry::all(['_id', 'name']);
        $id=Auth::guard('jobprovider')->user()->id;
       
        if($id ){
            
            $provider = Jobprovider::with('subscription:id,name')->where('user_id', $id)->first();
            $provider->name                 = $request->name;
            $provider->email                = $request->email;
            $provider->mobile               = $request->mobile;
            $provider->company_name         = $request->company_name;
            $provider->designation          = $request->designation;
            $provider->jobindustry          = $request->jobindustry;
            $provider->address              = $request->address;
            $provider->city                 = $request->city;
            $provider->state                = $request->state;
            $provider->country              = $request->country;
            $provider->pincode              = $request->pincode;
            $provider->save();
            $user = User::where('_id', $id)->first();
            $user->name	    = $request->name;
            $user->email	= $request->email;
            $user->phone 	= $request->phone;
           if ($request->hasFile('image')) {
                $filename = $request->file('image')->getClientOriginalName();
                $filename = str_replace(' ', '-', $filename);
                $destinationPath = storage_path('app/public/uploads/');
                $file = $request->file('image')->move($destinationPath,$filename);
                
                $basePath = env('APP_URL');
    
                $user['image'] = $basePath . 'storage/uploads/' . $filename;
            }
            $user->designation	    = $request->designation;   
            
            $user->save(); 

        }
        return redirect ('jobprovider/profile')->with(['success' => 'User Updated successfully']);
          
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
