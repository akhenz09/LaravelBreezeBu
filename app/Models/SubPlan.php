<?php

namespace App\Models;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubPlan extends Model
{
    use HasFactory;

    //relationships

    public function plan(){
        return $this->belongsTo(Plan::class);
    }

    public function subPlan(){
        return $this->belongsTo(Plan::class);
    }
}
