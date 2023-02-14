<?php

namespace App\Models;
use App\Models\User;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Jobprovider extends Model
{
    use HasFactory;
    protected $fillable = ['jobproviders'];
    protected $guarded = ['id']; 
    public function nextid()
    {
        // ref is the counter - change it to whatever you want to increment
        $this->jobprovider_id = self::getID();
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
            ['jobprovider_id' => 'jobprovider_id'],
            ['$inc' => ['seq' => 1]],
            ['new' => true, 'upsert' => true]
        );
        return $seq->seq;
    }
    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class,'subscriptionplan');
    }
}
