<?php

namespace App\Models;

use App\Models\Candidate;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JobAppliedDetails extends Model
{
    use HasFactory;

    public function nextid()
    {
        // ref is the counter - change it to whatever you want to increment
        $this->job_applied_id = self::getID();
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
            ['job_applied_id' => 'job_applied_id'],
            ['$inc' => ['seq' => 1]],
            ['new' => true, 'upsert' => true]
        );
        return $seq->seq;
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class,'candidate_id');
    }

    public function Job()
    {
        return $this->belongsTo(Job::class,'job_id');
    }
}
