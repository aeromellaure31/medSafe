<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use Notifiable;

    protected $guard = 'patient';

     protected $fillable = [
         'firstname','middlename','lastname','age','gender','phoneNum','address','email','birthday','nationalityId','password'
     ];

     protected $hidden = ['password'];

     protected $table = 'patient';

     public function nationality(){
         return $this->hasOne('App\model\Nationalities','id','nationality');
     }

     public function getRememberTokenName()
    {
        return null; // not supported
    }
 
/**
* Overrides the method to ignore the remember token.
*/
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
    {
        parent::setAttribute($key, $value);
    }
    }
}
 