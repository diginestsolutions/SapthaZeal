<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function get(){
       

        return view('Admin/viewresponse');
    }
}
