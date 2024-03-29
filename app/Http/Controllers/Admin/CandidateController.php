<?php

namespace App\Http\Controllers\Admin;

use App\Models\Candidate;
use App\Models\User;
use App\Models\CandidateEducation;
use App\Models\CandidateExperience;
use App\Models\Job;
use App\Models\JobAppliedDetails;
use App\Models\CandidateCompanyDetails;
use validator;
use App\Http\Traits\ImageTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    use ImageTrait;
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Candidate::with('candidate_education','candidate_experience','candidate_company_details')->get();
        return view('Admin/candidate',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin/addcandidate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'joblocation' => 'required'
        ]);
        try {
           
            $user = new User();
           
            $user->nextid();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->role = "jobseeker";
            $user->status= "Active";		
            $user->otp = 1234;
           
            $user->save();

            $candidate = new Candidate;
            $candidate->nextid();
            $candidate->user_id = $user->id;
            if ($request->hasFile('image')) {
                $getImage = $this->getTrait($request->image);
                $basePath = env('APP_URL');
                $candidate->image = $basePath . '/storage/uploads/' . $getImage;
            }
            $candidate->name = $request->name;
            $candidate->email = $request->email;
            $candidate->mobile = $request->mobile;
            $candidate->joblocation = $request->joblocation;
            $candidate->height = $request->height;
            $candidate->weight = $request->weight;
            $candidate->address = $request->address;
            $candidate->status = "Active";
            $candidate->save();
            $response['success']=1;
            $response['message'] ='Candidate inserted successfully';
            $response['candidate_id']=$candidate->id;

            return $response;
        }catch (\Exception $e) {
            print($e);exit;
            return back()->withErrors(['message' => 'Failed to add candidate']);
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
        $candidate = Candidate::with('candidate_education','candidate_experience','candidate_company_details')->find($id);
        return view('Admin/viewcandidate',compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate = Candidate::with('candidate_education','candidate_experience','candidate_company_details')->find($id);
        //dd($candidate);
        return view('Admin/editcandidate',compact('candidate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $candidate = Candidate::find($request->candidate_id);
            if($candidate) {
                if ($request->hasFile('image')) {
                    $getImage = $this->getTrait($request->image);
                    $basePath = env('APP_URL');
                    $candidate->image = $basePath . '/storage/uploads/' . $getImage;
                }
                $candidate->name = $request->name;
                $candidate->email = $request->email;
                $candidate->mobile = $request->mobile;
                $candidate->joblocation = $request->joblocation;
                $candidate->height = $request->height;
                $candidate->weight = $request->weight;
                $candidate->address = $request->address;
                $candidate->save();

                $response['success']=1;
                $response['message'] ='Candidate updated successfully';
            }else {
                $response['success'] = 1;
                $response['message'] ='Candidate not found';
            }
            return $response;
        }
        catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update candidate'
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addeducation(Request $request)
    {
        try {
            if($request->educational_edit_id)
            {
                $educational_details = CandidateEducation::find($request->educational_edit_id);
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
            }else {
                $candidate = Candidate::find($request->candidate_id);
                if($candidate) {
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
                }
            }
            $candidate_list = CandidateEducation::where('candidate_id',$request->candidate_id)->get();
            $response['success'] = 1;
            $response['message'] ='Candidate Education Added Successfully';
            $response['data'] = $candidate_list;
            return $response;
        }catch (\Exception $e) {
            return back()->withErrors(['message' => 'Failed to add candidate']);
        }
    }
    public function editeducation($id) 
    {
        $candidate_education = CandidateEducation::find($id);

        if($candidate_education){
            return response()->json([
                'success' => 1,
                'data' => $candidate_education
            ], 201);
        }else{
            return response()->json([
                'message' => 'No data found'
            ], 400);
        }
    }
    public function educationdestroy($id)
    {
        $education=CandidateEducation::find($id);
        $response=array();
        $response['success']=0;
        $response['message'] ='';
        if($education)
        {
            $status = $education->delete();
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
    public function addexperience(Request $request)
    {
        try {
            $candidate = Candidate::find($request->candidate_id);
            if($candidate) {
                $candidate_experience = new CandidateExperience();
                $candidate_experience->nextid();
                $candidate_experience->candidate_id = $candidate->id;   
                $candidate_experience->salary = $request->salary;
                $candidate_experience->years = $request->years;
                $candidate_experience->months = $request->months;
                $candidate_experience->notice_period = $request->notice_period;
                $candidate_experience->job_description = $request->job_description;
                $candidate_experience->skill = $request->skill;
                $candidate_experience->status = "Active";
                $candidate_experience->save();
                $response['success'] = 1;
                $response['message'] ='Candidate Experience Added Successfully';
            }else {
                $response['success'] = 1;
                $response['message'] ='Candidate not found';
            }
            return $response;
        }catch (\Exception $e) {
            return back()->withErrors(['message' => 'Failed to add candidate']);
        }
    }
    public function changestatus(Request $request)
    {
        try {
            $candidate = Candidate::find($request->candidate_id);
            if($candidate)
            {
                $candidate->cover_letter = $request->cover_letter;
              
                if ($request->hasFile('file')) {
                    $filename = time().'.'.$request->resume->getClientOriginalExtension();
                    $filePath = storage_path('app/public/uploads/resumes/'); 
                    $request->resume->move($filePath, $filename);

                    $basePath = env('APP_URL');
                    $candidate->resume = $basePath . '/storage/uploads/resumes/' . $filename;
                }
                $candidate->save();
                $job_applied_details = JobAppliedDetails::where('candidate_id',$candidate->_id)
                                       ->where('job_id',$request->jobid)->first();
                $job_applied_details->applied_status = 'scheduled_resumes';
                $job_applied_details->save();
                if($request->provider_status == 1) {
                    $job_applied_details->applied_status = 'interested';
                }
                if($request->provider_status == 2) {
                    $job_applied_details->applied_status = 'scheduled_resumes';
                }
                if($request->provider_status == 3) {
                    $job_applied_details->applied_status = 'interview_scheduled';
                }
                if($request->provider_status == 4) {
                    $job_applied_details->applied_status = 'negotiation';
                }
                if($request->provider_status == 5) {
                    $job_applied_details->applied_status = 'hired';
                }

                if($request->candidate_status == 1) {
                    $job_applied_details->candidate_status = 'applied';
                }
                if($request->candidate_status == 2) {
                    $job_applied_details->candidate_status = 'in_progress';
                    $job_applied_details->remark = $request->remark;
                }
                if($request->candidate_status == 3) {
                    $job_applied_details->candidate_status = 'resume_evaluation';
                }
                if($request->candidate_status == 4) {
                    $job_applied_details->candidate_status = 'incomplete_application';
                    $job_applied_details->reson = $request->reson;
                    $job_applied_details->remark = $request->remark;
                }
                if($request->candidate_status == 5) {
                    $job_applied_details->candidate_status = 'interview_scheduled';
                    $job_applied_details->interview_date = $request->interview_date;
                    $job_applied_details->interview_place = $request->interview_place;
                    $job_applied_details->remark = $request->remark;
                }
                if($request->candidate_status == 6) {
                    $job_applied_details->candidate_status = 'negotiation';
                    $job_applied_details->remark = $request->remark;
                }
                $job_applied_details->save();

                $response['success'] = 1;
                $response['message'] ='Candidate Status Changed Successfully';
            }else {
                $response['success'] = 1;
                $response['message'] ='Candidate not found';
            }
            return $response;
        }catch (\Exception $e) {
            return back()->withErrors(['message' => 'Failed to update candidate']);
        }
    }
    public function updateexperience(Request $request)
    {
        try{
            $candidate_experience = CandidateExperience::where('candidate_id',$request->candidate_id)->first();
            if($candidate_experience) {
                $candidate_experience->salary = $request->salary;
                $candidate_experience->years = $request->years;
                $candidate_experience->months = $request->months;
                $candidate_experience->notice_period = $request->notice_period;
                $candidate_experience->job_description = $request->job_description;
                $candidate_experience->skill = $request->skill;
                $candidate_experience->save();

                $response['success']=1;
                $response['message'] ='Candidate experience updated successfully';
            }else {
                $candidate_experience = new CandidateExperience();
                $candidate_experience->nextid();
                $candidate_experience->candidate_id = $request->candidate_id;   
                $candidate_experience->salary = $request->salary;
                $candidate_experience->years = $request->years;
                $candidate_experience->months = $request->months;
                $candidate_experience->notice_period = $request->notice_period;
                $candidate_experience->job_description = $request->job_description;
                $candidate_experience->skill = $request->skill;
                $candidate_experience->status = "Active";
                $candidate_experience->save();
                $response['success'] = 1;
                $response['message'] ='Candidate experience added successfully';
            }
            return $response;
        }
        catch (\Exception $e) {
            echo $e;
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update candidate'
            ], 400);
        }
    }
    public function shortlisted($id)
    {
        $job = Job::with(['job_applied_details' => function ($query) use ($id){
                    $query->where('candidate_id',$id);
               }])->orderBy('_id', 'ASC')->get();
              //  dd($job);
        return view('Admin/shortlisted',array('job'=>$job));
    }
    public function doshortlisted($id,$candidate_id)
    {
        try {
            $job_applied_details = new JobAppliedDetails();
            $job_applied_details->nextid();
            $job_applied_details->job_id = $id;
            $job_applied_details->candidate_id = $candidate_id;
            $job_applied_details->applied_status = 'scheduled_resumes';
            $job_applied_details->save();
            $response['success'] = 1;
            $response['message'] ='Shortlisted Successfuly';
            return $response;
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update candidate'
            ], 400);
        }
    }
    public function addcompany(Request $request,$candidate_id) 
    {
        try {
            $candidate = Candidate::find($request->candidate_id);
            if($candidate)
            {
                if($request->company_edit_id)
                {
                    $candidate_company = CandidateCompanyDetails::find($request->company_edit_id);
                    $candidate_company->current_employee_status = $request->current_employee_status;
                    $candidate_company->employement_type = $request->employement_type;
                    $candidate_company->company_name = $request->company_name;
                    $candidate_company->designation = $request->designation;
                    $candidate_company->Joining_date = $request->Joining_date;
                    $candidate_company->leaving_date = $request->leaving_date;
                    $candidate_company->save();

                    $company_list = CandidateCompanyDetails::where('candidate_id',$request->candidate_id)->get();

                    $response['success']=1;
                    $response['message'] ='Company details Updated successfully';
                    $response['data'] = $company_list;
                }else {
                    $candidate_company = new CandidateCompanyDetails();
                    $candidate_company->nextid();
                    $candidate_company->candidate_id = $candidate->id;   
                    $candidate_company->current_employee_status = $request->current_employee_status;
                    $candidate_company->employement_type = $request->employement_type;
                    $candidate_company->company_name = $request->company_name;
                    $candidate_company->designation = $request->designation;
                    $candidate_company->Joining_date = $request->Joining_date;
                    $candidate_company->leaving_date = $request->leaving_date;
                    $candidate_company->save();

                    $company_list = CandidateCompanyDetails::where('candidate_id',$request->candidate_id)->get();

                    $response['success'] = 1;
                    $response['message'] = 'Company details added successfully';
                    $response['data'] = $company_list;
                }
            }else {
                $response['success'] = 0;
                $response['message'] ='Candidate not found';
            }
            return $response;

        } catch (\Exception $e) {
            echo $e;
            return response()->json([
                'status'  => false,
                'message' => 'Failed to update candidate'
            ], 400);
        }
    }
    public function editcompany($id)
    {
        $candidate_company = CandidateCompanyDetails::find($id);
        
        $response['success'] = 1;
        $response['data'] = $candidate_company;
        return $response;
    }
    public function companydestroy($id)
    {
        $company_details=CandidateCompanyDetails::find($id);
        $response=array();
        $response['success']=0;
        $response['message'] ='';
        if($company_details)
        {
            $status = $company_details->delete();
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
