<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\User;
use Auth;

class IndustryController extends Controller
{
    public function industry(){

        return view('Admin/addindustry');
    }
    public function addindustry(Request $request){
      
       try{
           
            $industry                      = new industry;
            $industry->nextid();
            $industry->name              = $request->industryname;
            $industry->status            ="Approved";
            $industry->save();
            $industry->industry_id          = $industry->industry_id;
            $industry->save();
       }
      
        catch (\Exception $e) {
            //echo $e;
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update subscription'
            ], 400);
        }
          
        
        return redirect('admin/industry')->with('success', 'industry created successfully.'); 
           
      

    
    }
    public function viewindustry(){
        $industry = Industry::orderBy('_id', 'ASC')->get();
      
        return view('Admin/Industry',array('industry'=>$industry));

    }
    public function edit($id)
    {
        $industry = Industry::find($id);
        return view('Admin/editindustry', compact('industry')); 
    }
    public function update(Request $request, $id)
    {
      
        
        $industry = Industry::find($id);
       
        $industry->name              = $request->industryname;
     
        $industry->save();
 
        return redirect('admin/industry');
    }
    public function destroy($id)
    {
        $industry = Industry::find($id);
        $industry->delete();
       
        return redirect('admin/industry'); 
    } 
}
