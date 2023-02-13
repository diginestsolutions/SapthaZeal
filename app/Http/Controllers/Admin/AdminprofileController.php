<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
class AdminprofileController extends Controller
{
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
         
            'phone'     => 'required|integer|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users',
            'image'      => 'nullable|mimetypes:image/jpeg,image/jpg,image/png',
            'designation'=> 'required|string|',
            'role'       => 'required|string|',
            'status'     => 'required|string'
        ]);

        
      
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
            $filename = $request->file('image')->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $destinationPath = storage_path('app/public/uploads/');
            $file = $request->file('image')->move($destinationPath,$filename);
            
            $basePath = env('APP_URL');

            $user['image'] = $basePath . 'storage/uploads/' . $filename;
        }
        $user->designation	    = $request->designation;   
        $user->role             = "Admin";   
        $user->status           = "Active";  
        $user->save(); 
       
        

        return redirect('admin/admin')->with('success', 'usercreated successfully.'); 
    }
    catch (\Exception $e) {
        return back()->withErrors(['message' => 'Failed to update subscription']);
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
    public function changeStatus($id)
    {
        $user = User::find($id);
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
      $id=Auth::id();
        $user = User::find($id);
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $destinationPath = storage_path('app/public/uploads/');
            $file = $request->file('image')->move($destinationPath,$filename);
            
            $basePath = env('APP_URL');

            $user['image'] = $basePath . 'storage/uploads/' . $filename;
        }
       
        if($user!= null){
            $data      = $request->all();
          
     
            $user->update($data);
        }
 
        return view ('Admin/editprofile',compact('user'))->with('success', 'userupdated successfully.');
    }
    public function update1(Request $request,$id)
    {
     
        $user = User::find($id);
       
        if($user!= null){
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
            $user->status           = "1";  
            $user->save(); 
        }
 
        return redirect('admin/admin')->with('success', 'userupdated successfully.');
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

}
