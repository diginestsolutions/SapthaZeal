<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Traits\ImageTrait;
use Validator;

class AdminprofileController extends Controller
{
    use ImageTrait;
     
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user1 = User::where('role', '=', 'Admin')->get();
        $users = $user1->except(Auth::id());
        return view('Admin/admin',compact('users'));
  
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
         # Validate Data
        
         $validator = Validator::make($request->all(), [
            'name'       => 'required|string|between:2,100',
            'email'      => 'required|string|email|max:100|unique:users',
            'phone'     => 'required|integer|unique:users',
            'designation'=> 'required|string|',
           
        ]);

        if($validator->fails()) {
            return redirect('admin/admin')->with('error', 'User already Exists.');
        }
        else{
            try{
                $code = random_int(1000, 9999);
                $user = new User();
                $user->nextid();		
                $user->name 	= $request->name;
                $user->email	= $request->email;
                $user->phone 	= $request->phone;
                $user->password = bcrypt($request->password);
                $user->otp 	    = $code;
                if ($request->hasFile('image')) {
                    $getImage = $this->getTrait($request->image);
                    $basePath = env('APP_URL');
                    $user->image = $basePath . '/storage/uploads/' . $getImage;
                }
                $user->designation	    = $request->designation;   
                $user->role             = "Admin";   
                $user->status           = "Saved";  
                
                $user->save();     

                return redirect('admin/admin')->with(['success' => 'User Created successfully']);
            }
            catch (\Exception $e) {
                return back()->withErrors(['message' => 'Failed to create User']);
            }
        }
    }
    

    public function destroy($id)
    {
        $user =User::find($id);
        $response=array();
        $response['success']=0;
        $response['message'] ='';
        if($user)
        {
            $status = $user->delete();
            $response['success']=1;
            $response['message'] ='Delete Success';

        }
        else
        {
            $response['success'] = 0;
            $response['message'] = 'Data not Exist';
        }
        return response()->json($response);
    }
    #changestatus
    public function changeStatus(Request $request)
        {
            $user = User::find($request->id);
            $user->status = $request->status;
            $user->save();
      
            return response()->json(['success'=>'Status change successfully.']);
        }
    public function edit()
    {
        $id=Auth::id();
        $user = User::find($id);
       return view ('Admin/editprofile',compact('user'));
       
        
    }
    
    public function update(Request $request)
    {
        
        $user =Auth::user();
        if($user ){
            $user->name 	= $request->name;
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
        
        return redirect ('admin/profileadmin')->with(['success' => 'User Updated successfully']);
    
   
    }
    public function update1(Request $request)
    {
       
        
            try{
        $user = User::find($request->id);
       
       
        if($user){
            $user->name 	= $request->name;
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
            $user->role             = "Admin";   
           
            $user->save(); 
        }
    
        return redirect('admin/admin')->with('success', 'User Updated successfully.');
    }
    catch (\Exception $e) {
        return back()->withErrors(['message' => 'Failed to update subscription']);
    }

    
    }
   public function show($id)
    {
        $user = User::find($id);

        if($user){
            return response()->json([
                'success' => 1,
                'data' => $user
            ], 201);
        }else{
            return response()->json([
                'message' => 'No data found'
            ], 400);
        }
    }
    public function edituser($id)
    {
        $user = User::find($id);

        if($user){
            return response()->json([
                'success' => 1,
                'data' => $user
            ], 201);
        }else{
            return response()->json([
                'message' => 'No data found'
            ], 400);
        }
    }
    public function statusapproved($id)
    {
       
            $user = User::findOrFail($id);
            if($user) {
                $user->status= "Active";
                $user->save();

                $response['success']=1;
                $response['message'] ='Approve Success';
            }else{
                $response['success'] = 0;
                $response['message'] = 'User Not Found';
            }
        
        return response()->json($response);
    }
    public function statusrejected($id)
    {
       
            $user = User::findOrFail($id);
            if($user) {
                $user->status= "Inactive";
                $user->save();

                $response['success']=1;
                $response['message'] ='Approve Success';
            }else{
                $response['success'] = 0;
                $response['message'] = 'User Not Found';
            }
        
        return response()->json($response);
    }

}