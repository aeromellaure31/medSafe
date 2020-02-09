<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class AppointmentRequests extends Model
{
    //
    protected $fillable = ['patient_id','doctor_id','message','request','Status']; 

    protected $table ='appointmentRequests';
    
public function requestDoctor(){
    return $this->hasMany('App\model\Patient', 'id', 'patient_id');
    }
}
