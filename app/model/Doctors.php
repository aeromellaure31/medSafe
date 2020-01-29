<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    //
    protected $fillable = [
        'firstname','middlename','lastname','age','gender','phoneNum','address','email','birthday','nationality','password','specialtyId', 'licenseNum',
    ];

    protected $hidden = ['password'];

    function specialty(){
        return $this->hasOne('App\model\Specialties','id','specialtyId');
    }

}
