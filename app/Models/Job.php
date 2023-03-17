<?php

namespace App\Models;

use App\Models\Industry;
use App\Models\JobAppliedDetails;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $collection = 'jobs';
    protected $guarded = [];
    protected $dates = ['expirydate'];
    public function nextid()
    {
        // ref is the counter - change it to whatever you want to increment
        $this->job_id = self::getID();
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
            ['job_id' => 'job_id'],
            ['$inc' => ['seq' => 1]],
            ['new' => true, 'upsert' => true]
        );
        return $seq->seq;
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class,'jobindustry');
    }
    public function user() {

        return $this->belongsTo(User::class,'jobprovider');
    }
    public function job_applied_details()
    {
        return $this->hasMany(JobAppliedDetails::class,'job_id');
    }
   
}

