<?php
namespace App\Models;

use App\Models\User;
use App\Models\CandidateEducation;
use App\Models\CandidateExperience;
use App\Models\JobAppliedDetails;
use App\Models\CandidateCompanyDetails;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Candidate extends Model
{
    use HasFactory;
    protected $collection = '';
    protected $guarded = [];
    protected $dates = ['Joining_date'];
    public function nextid()
    {
        // ref is the counter - change it to whatever you want to increment
        $this->candidate_id = self::getID();
    }

    public static function bootUseAutoIncrementID()
    {
        static::creating(function ($model) {
            $model->sequencial_id = self::getID($model->getTable());
        });
    }
    public function getCasts()
    {
        return $this->casts;
    }

    
    private static function getID()
    {
        $seq = DB::connection('mongodb')->getCollection('counters')->findOneAndUpdate(
            ['candidate_id' => 'candidate_id'],
            ['$inc' => ['seq' => 1]],
            ['new' => true, 'upsert' => true]
        );
        return $seq->seq;
    }

    public function user() {

        return $this->belongsTo(User::class,'user_id');
    }
    public function candidate_education()
    {
        return $this->hasMany(CandidateEducation::class,'candidate_id');
    }
    public function candidate_experience()
    {
        return $this->hasOne(CandidateExperience::class,'candidate_id');
    }
    public function candidate_company_details()
    {
        return $this->hasMany(CandidateCompanyDetails::class,'candidate_id');
    }
    public function candidate_job_applied_details()
    {
        return $this->hasMany(JobAppliedDetails::class,'candidate_id');
    }
}
