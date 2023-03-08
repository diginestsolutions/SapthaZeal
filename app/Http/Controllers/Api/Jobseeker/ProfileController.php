<?php

namespace App\Http\Controllers\Api\Jobseeker;

use App\Models\Candidate;
use App\Models\CandidateEducation;
use App\Models\CandidateExperience;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class ProfileController extends Controller
{
    public function profile($id)
    {
        $candidate = Candidate::where('user_id',$id)->first();
        if($candidate != null){
            return response()->json([
                'message' => 'Success',
                'data' => $candidate
            ], 201);
        }
        else{
            return response()->json([
                'message' => 'Error',
               ], 400);
        }
    }
    public function basicdetails(Request $request) 
    {
        $rules = array(
            'email'     => 'required|string|email|max:100|unique:users,email',
            'mobile'    => 'required|integer|min:10|unique:users,mobile'
        );
        $messages=array(
            'email.required'  => 'Email is required',
            'email.unique'    => 'The email has already been taken',
            'mobile.required' => 'mobile is required',
            'mobile.unique'   => 'The mobile has already been taken'
        );
        
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails())
        {
            $messages=$validator->messages();
            $errors=$messages->all();
            return response()->json(['message' => join(',', $errors)], 400);
        }
        try {
            $candidate = Candidate::where('user_id',$request->id)->first();
            if($candidate) {
                $candidate->email = $request->email;
                $candidate->mobile = $request->mobile;
                $candidate->joblocation = $request->joblocation;
                $candidate->height = $request->height;
                $candidate->weight = $request->weight;
                $candidate->address = $request->address;
                $candidate->save();

                return response()->json([
                    'message' => 'Basic Details Added Successfully',
                    'data' => $candidate
                ], 201);
            }else { 
                return response()->json([
                    'message' => 'Candidate Not Found',
                ], 201);
            }
        } catch (\Throwable $th) {
            echo $th;
            return response()->json([
                'message' => 'Error',
                'data' => $th
            ], 409);
        }
    }
    public function educationaldetails(Request $request) 
    {
        try {
            $candidate = Candidate::where('user_id',$request->id)->first();
            if($candidate) {
                if($request->candidate_educational_id)
                {
                    $educational_details = CandidateEducation::find($request->candidate_educational_id);
                    $educational_details->education = $request->education;
                    if($request->option == 1) {
                        $educational_details->board = $request->board;
                        $educational_details->school_medium = $request->schoolmedium;
                        $educational_details->university = "";
                        $educational_details->course = "";
                        $educational_details->specialization = "";
                        $educational_details->course_type = "";
                        $educational_details->passout = $request->passout;
                        $educational_details->mark_obtained = $request->marks;
                    }else {  
                        $educational_details->board = "";
                        $educational_details->school_medium = "";
                        $educational_details->university = $request->university;
                        $educational_details->course = $request->course;
                        $educational_details->specialization = $request->specialization;
                        $educational_details->course_type = $request->course_type;
                        $educational_details->passout = $request->passout;
                        $educational_details->mark_obtained = $request->marks;
                    }
                    $educational_details->save();    
                    
                    return response()->json([
                        'message' => 'Educational Details Updated Successfully',
                        'data' => $educational_details 
                    ], 201);

                } else {
                    $educational_details = new CandidateEducation();
                    $educational_details->nextid();
                    $educational_details->candidate_id = $candidate->id;   
                    $educational_details->education = $request->education;
                    if($request->option == 1) {
                        $educational_details->board = $request->board;
                        $educational_details->school_medium = $request->schoolmedium;
                        $educational_details->university = "";
                        $educational_details->course = "";
                        $educational_details->specialization = "";
                        $educational_details->course_type = "";
                        $educational_details->passout = $request->passout;
                        $educational_details->mark_obtained = $request->marks;
                    }else {  
                        $educational_details->board = "";
                        $educational_details->school_medium = "";
                        $educational_details->university = $request->university;
                        $educational_details->course = $request->course;
                        $educational_details->specialization = $request->specialization;
                        $educational_details->course_type = $request->course_type;
                        $educational_details->passout = $request->passout;
                        $educational_details->mark_obtained = $request->marks;
                    }
                    $educational_details->status = "Active";
                    $educational_details->save();    
                    
                    return response()->json([
                        'message' => 'Educational Details Added Successfully',
                        'data' => $educational_details 
                    ], 201);
                }
            }else { 
                return response()->json([
                    'message' => 'Candidate Not Found',
                ], 201);
            }
        } catch (\Throwable $th) {
            echo $th;
            return response()->json([
                'message' => 'Error',
                'data' => $th
            ], 409);
        }
    }
    public function experiencedetails(Request $request) 
    {
        try {
            $candidate = Candidate::where('user_id',$request->id)->first();
            if($candidate) {
                if($request->candidate_experience_id)
                {
                    $candidate_experience = CandidateExperience::find($request->candidate_experience_id);
                    $candidate_experience->current_employee_status = $request->current_employee_status;
                    $candidate_experience->employement_type = $request->employement_type;
                    $candidate_experience->company_name = $request->company_name;
                    $candidate_experience->designation = $request->designation;
                    $candidate_experience->Joining_date = $request->Joining_date;
                    $candidate_experience->save();

                    return response()->json([
                        'message' => 'Experience Details Updated Successfully',
                        'data' => $candidate_experience 
                    ], 201);
                }else {
                    $candidate_experience = new CandidateExperience();
                    $candidate_experience->nextid();
                    $candidate_experience->candidate_id = $candidate->id;   
                    $candidate_experience->current_employee_status = $request->current_employee_status;
                    $candidate_experience->employement_type = $request->employement_type;
                    $candidate_experience->company_name = $request->company_name;
                    $candidate_experience->designation = $request->designation;
                    $candidate_experience->Joining_date = $request->Joining_date;
                    $candidate_experience->status = "Active";
                    $candidate_experience->save();

                    return response()->json([
                        'message' => 'Experience Details Added Successfully',
                        'data' => $candidate_experience 
                    ], 201);
                }
            }else { 
                return response()->json([
                    'message' => 'Candidate Not Found',
                ], 201);
            }
        } catch (\Throwable $th) {
            echo $th;
            return response()->json([
                'message' => 'Error',
                'data' => $th
            ], 409);
        }
    }
    public function skilldetails(Request $request) 
    {
        try {
            $candidate = Candidate::where('user_id',$request->id)->first();
            if($candidate) {
                $candidate_experience = CandidateExperience::where('candidate_id',$candidate->id)->first();
                $candidate_experience->skill = $request->skill;
                $candidate_experience->save();
                
                return response()->json([
                    'message' => 'Skill Set Added Successfully',
                    'data' => $candidate_experience 
                ], 201);
            }else { 
                return response()->json([
                    'message' => 'Candidate Not Found',
                ], 201);
            }
        } catch (\Throwable $th) {
            echo $th;
            return response()->json([
                'message' => 'Error',
                'data' => $th
            ], 409);
        }
    }
}
