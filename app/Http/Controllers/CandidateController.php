<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;
use validator;
class CandidateController extends Controller
{
    public function candidate(){
      
      
        $results = Candidate::with('user')->get();
      
        return view('Admin/candidate',compact('results'));
     
    }
    public function add(Request $request){
      
   

        $user = new User();
        $user->nextid();		
        $user->name 	= $request->name;
        $user->email	= $request->email;
        $user->mobile	= $request->mobile;
        $user->password = bcrypt(1234);
        $user->otp = 1234;
        
        $user->role ="jobseeker";
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $destinationPath = storage_path('app/public/uploads/');
            $file = $request->file('image')->move($destinationPath,$filename);
            
            $basePath = env('APP_URL');

            $user['image'] = $basePath . '/uploads/' . $filename;
        }
            $user->save();   
            $candidate                      = new Candidate;
            $candidate->nextid();
            $candidate->user_id             = $user->id;
            $candidate->joblocation         = $request->joblocation;
            $candidate->height              = $request->height;
            $candidate->weight              = $request->weight;
            $candidate->designation         = $request->designation;
           
            $candidate->status               = $request->status;
            $candidate->save();
            $candidate->candidate_id          = $candidate->candidate_id;
            $candidate->save();

           
        
            return redirect('admin/candidate'); 
    }
    public function addcandidate(){

        return view('Admin/addcandidate');
    }
    public function education(){

        return view('Admin/addeducation');
    }

}
