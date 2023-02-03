<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubController extends Controller
{
    public function Index()
    {
        # code...
        $subscriptionplans = Subscription::get();
        return view('Admin/subscriptionplan',compact('subscriptionplans'));
    }
}
