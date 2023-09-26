<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $casts = [
        'starts_at' => 'date',
        'ends_at' => 'date',
        'paid_at' => 'date',
    ];

    public function plan(){
        return $this->belongsTo(Plan::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
