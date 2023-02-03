<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Industry extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nextid()
    {
        // ref is the counter - change it to whatever you want to increment
        $this->industry_id = self::getID();
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
            ['industry_id' => 'industry_id'],
            ['$inc' => ['seq' => 1]],
            ['new' => true, 'upsert' => true]
        );
        return $seq->seq;
    }
}
