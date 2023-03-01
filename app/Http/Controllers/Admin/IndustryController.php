<?php

namespace App\Http\Controllers\Admin;

use App\Models\Industry;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.industry')->with([
            'industry' => Industry::orderBy('_id','ASC')->get()
        ]);
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
     * This function used to create new industry
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # Validate Data
        $validator = Validator::make($request->all(), [
          
            'name'      => 'required|string|max:100|unique:industries',
           
           
        ]);
        if($validator->fails()) {
            return redirect('admin/industry')->with('error', 'Industry already Exists.');
        }
        else{
        try{
            $industry = new Industry;
            $industry->nextid();
            $industry->name = $request->name;
            $industry->status = "Active";
            $industry->save();
            return redirect('admin/industry')->with('success', 'Industry created successfully.'); 
        }      
        catch (\Exception $e) {
            return back()->withErrors(['message' => 'Failed to create Industry']);
        }
    }
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
     * Show the form for editing the industry.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $industry = Industry::find($id);

        if($industry){
            return response()->json([
                'success' => 1,
                'data' => $industry
            ], 201);
        }else{
            return response()->json([
                'message' => 'No data found'
            ], 400);
        }
    }

    /**
     * Update the specified industry.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        try {            
            $industry = Industry::find($request->id);
            if($industry){
                $industry->name = $request->name;
                $industry->save();
            }
            return redirect('admin/industry')->with(['success' => 'User Updated successfully']);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Error'
            ],400);
        }
    
    }

    /**
     * Remove the specified industry.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $industry=Industry::find($id);
        $response=array();
        $response['success']=0;
        $response['message'] ='';
        if($industry)
        {
            $status = $industry->delete();
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
}
