<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    //
    protected $fillable = [
        'patientId','doctorId','illness', 'causeBy', 'physicalExam', 'assessment', 'recommendation',
    ];

    public function patient(){
        return $this->hasMany('App\model\Patient','id','patientId');
    }
}
