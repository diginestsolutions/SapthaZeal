<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notification;
class NotificationController extends Controller
{
    public function notification(){

        $candidate = Notification::all();
      
        $users = User::where('role', '!=', 'Admin')->get();
         
        
     return view('Admin/notification',compact('candidate','users')); 
    
    }
    public function add(Request $request){
      
       
        $users = User::where('role', '!=', 'admin')->distinct('role')->get();
      
        $not                      = new Notification;
       
      
        $not->usertype         = $request->usertype;
        $not->heading          = $request->heading;
        $not->description      = $request->description;
        $not->status           = $request->status;
        $not->save();
      

       
    
    return view('Admin/notification',array('users'=>$users));
}

}
