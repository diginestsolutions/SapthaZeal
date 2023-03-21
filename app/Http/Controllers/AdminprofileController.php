<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AdminprofileController extends Controller
{
    public function admin(){

    
        $user1 = User::where('role', '=', 'admin')->get();
        $users= $user1->except(Auth::id());
        return view('Admin/admin',compact('users'));
  
  
    }
    public function register(Request $request) {

        // $validator = Validator::make($request->all(), [
        //     'name'       => 'required|string|between:2,100',
        //     'email'      => 'required|string|email|max:100|unique:users',
        //     'password'   => 'required|string|min:6',
        //     'phone'     => 'required|integer|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users',
        //     'image'      => 'nullable|mimetypes:image/jpeg,image/jpg,image/png',
        //     'designation'=> 'required|string|',
        //     'role'       => 'required|string|',
        //     'status'     => 'required|string'
        // ]);

        // if($validator->fails()){
        //     return response()->json($validator->errors()->toJson(), 400);
        // }
        // return $request->all();
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
        $user->role             = "admin";   
        $user->status           = "active";  
        $user->save(); 
        $user->user_id          = $user->user_id;
        $user->save();
        

        return redirect('admin/admin')->with('success', 'usercreated successfully.'); 

    }
    public function update1(Request $request,$id)
    {
     
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
 
        return redirect('admin/admin');
    }

    public function changeStatus($id)
    {
        $user = User::find($id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);

    }

    public function delete($id)
    {
        $user = User::find($id);
     
        $user->delete();
  
        return redirect()->route('view.admin')
        ->with('success','User deleted successfully');
        
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
 
        return view ('Admin/editprofile',compact('user'));
    }

}
