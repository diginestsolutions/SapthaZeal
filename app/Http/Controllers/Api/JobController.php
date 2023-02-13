<?php

namespace App\Http\Controllers\Api;

use App\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function job()
    {
        try {
            $data = Job::get();
            if(count($data) > 0){
                return response()->json(['message' => 'Success','data' => $data], 200);
            }else{
                return response()->json(['message' => 'No data found'],400);
            }    
        } catch (\Throwable $th) {
            echo $th;
            return response()->json(['message' => 'Error'], 400);
        }

    }
}

