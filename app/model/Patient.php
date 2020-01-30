<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
     protected $fillable = [
         'firstname','middlename','lastname','age','gender','phoneNum','address','email','birthday','nationality','password'
     ];

     protected $hidden = ['password'];

     protected $table = 'patient';

     public function nationality(){
         return $this->hasOne('App\model\Nationalities','id','nationality');
     }

     
}
