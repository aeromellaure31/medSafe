<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    //
    protected $fillable = [
        'patient_id','diagnosis','status'
    ];
}
