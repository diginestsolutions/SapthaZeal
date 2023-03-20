<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use App\Models\Notification;
class NotificationController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function notification(){

        $result = Notification::with('user')->get();
        $user = User::where('role', '!=', 'Admin')->get();
        $users = $user->unique('role');
         return view('Admin/notification',compact('result','users')); 
    
    }
    public function add(Request $request){
        $validator = Validator::make($request->all(), [
            'heading'     => 'required|unique:notifications',
        ]);

        if($validator->fails()) {
            return redirect('admin/notifications')->with('error', 'Notification already Exists.');
        }
        try{
        $notification = new Notification;
        $notification->nextid();
        $notification->usertype = $request->usertype;
        $notification->heading  = $request->heading;
        $notification->description = $request->description;
        $notification->status   = "Active";
        $notification->save();
        return redirect('admin/notifications')->with('success', 'notification created successfully.'); 
        }      
        catch (\Exception $e) {
            return back()->withErrors(['message' => 'Failed to create notification']);
        }

       
    }
    public function show($id)
    {
        $notification = Notification::find($id);

        if($notification){
            return response()->json([
                'success' => 1,
                'data' => $notification
            ], 201);
        }else{
            return response()->json([
                'message' => 'No data found'
            ], 400);
        }
    }

}
?>