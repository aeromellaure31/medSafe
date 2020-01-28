<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class AppointmentRequests extends Model
{
    //
    protected $fillable = ['patient_id','doctor_id','message','request']; 

    protected $table ='appointmentRequests';
}
