<?php

namespace App\Models;

use App\Models\Subscription;
use App\Models\Jobprovider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $collection = 'orders';
    protected $guarded = [];

    public function nextid()
    {
        // ref is the counter - change it to whatever you want to increment
        $this->order_id = self::getID();
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
            ['order_id' => 'order_id'],
            ['$inc' => ['seq' => 1]],
            ['new' => true, 'upsert' => true]
        );
        return $seq->seq;
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class,'subscriptionplan');
    }
    public function jobprovider()
    {
        return $this->belongsTo(Jobprovider::class,'provider_id');
    }
}
