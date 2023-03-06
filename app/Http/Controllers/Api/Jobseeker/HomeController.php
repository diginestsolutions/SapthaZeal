<?php

namespace App\Http\Controllers\Api\Jobseeker;

use App\Models\Candidate;
use App\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home($id)
    {
        $candidate = Candidate::with('candidate_education','candidate_experience')->where('user_id',$id)->first();
        if($candidate != null){
            $hot_jobs = Job::where('jobcategory','Boosted')->orderBy('created_at', 'desc')->take(10)->get();
            $recommended_jobs = Job::where('experienceyears', 'like', '%' . $candidate->candidate_experience->years . '%')
            ->orwhere('skills', 'like', '%' . $candidate->candidate_experience->skill . '%')            
            ->orderBy('created_at', 'desc')->take(10)->get();
            $other_jobs = Job::where('jobcategory','medicalfield')->orderBy('created_at', 'desc')->take(10)->get();
            return response()->json([
                'message' => 'Success',
                'hot_jobs' => $hot_jobs,
                'recommended_jobs' => $recommended_jobs,
                'other_jobs' => $other_jobs
            ], 201);
        }
        else{
            return response()->json([
                'message' => 'Error',
               ], 400);
        }
    }
    public function hotjobs()
    {
        $hot_jobs = Job::where('jobcategory','Boosted')->orderBy('created_at', 'desc')->get();
        return response()->json([
            'message' => 'Success',
            'hot_jobs' => $hot_jobs,
        ], 201);
    }
    public function recommendedjobs($id)
    {
        $candidate = Candidate::with('candidate_education','candidate_experience')->where('user_id',$id)->first();
        if($candidate != null){
            $recommended_jobs = Job::where('experienceyears', 'like', '%' . $candidate->candidate_experience->years . '%')
            ->orwhere('skills', 'like', '%' . $candidate->candidate_experience->skill . '%')            
            ->orderBy('created_at', 'desc')->get();
            return response()->json([
                'message' => 'Success',
                'recommended_jobs' => $recommended_jobs,
            ], 201);
        }
        else{
            return response()->json([
                'message' => 'Error',
               ], 400);
        }
    }
    public function otherjobs()
    {
        $other_jobs = Job::where('jobcategory','medicalfield')->orderBy('created_at', 'desc')->get();
        return response()->json([
            'message' => 'Success',
            'other_jobs' => $other_jobs
        ], 201);
    }
}
