<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Candidate extends Model
{
    use HasFactory;
    protected $collection = '';
    protected $guarded = [];

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
}
