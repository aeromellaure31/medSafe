<?php

use Illuminate\Database\Seeder;
use App\model\Doctors;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
      

        Doctors::create(array(
            'firstname'     => 'Administrator',
            'middlename' => 'admin',
            'lastname'    => 'admin@admin.com',
            'age' => 1,
            'gender' => 'sdfasdf',
            'phoneNum' =>021245,
            'address' => 'sdfsdf',
            'email' => 'irish@gmail.com',
            'birthday' => 'sdhfsd',
            'nationalityId' => 1,
            'password' => Hash::make('a'), 
            'specialtyId' =>1, 
            'licenseNum' =>2
        ));

        Doctors::create(array(
            'firstname'     => 'Irish',
            'middlename' => 'Solatorio',
            'lastname'    => 'Rufo',
            'age' => 1,
            'gender' => 'female',
            'phoneNum' =>021245,
            'address' => 'sdfsdf',
            'email' => 'a@gmail.com',
            'birthday' => 'sdhfsd',
            'nationalityId' => 1,
            'password' => Hash::make('a'), 
            'specialtyId' =>2, 
            'licenseNum' =>2
        ));

    }
}