<?php

use Illuminate\Database\Seeder;
use App\model\Patient;
class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Patient::create(array('firstname'=>'Mary Jane',
        'middlename'=> 'Paller',
        'lastname'=> 'Laure',
        'age'=>19,
        'gender' => 'Female',
        'phoneNum'=>  "09482255064",
        'address' => 'Danao, Bohol',
        'email' => 'mj@gmail.com',
        'birthday'=> 'dec 25, 1999',
        'nationalityId' => 2,
        'password' => Hash::make('a')
    ));

       Patient::create( array('firstname'=>'Aeromel',
       'middlename'=> 'Paller',
       'lastname'=> 'Laure',
       'age'=>19,
       'gender' => 'Male',
       'phoneNum'=> "0948225564",
       'address' => 'Danao, Bohol',
       'email' => 'laure@gmail.com',
       'birthday'=> 'dec 25, 1999',
       'nationalityId' => 2,
       'password' => Hash::make('a')));

       Patient::create( array('firstname'=>'Irish',
       'middlename'=> 'Solatorio',
       'lastname'=> 'Rufo',
       'age'=>19,
       'gender' => 'Female',
       'phoneNum'=> "0948225564",
       'address' => 'Simala, Sibonga, Bohol',
       'email' => 'irish@gmail.com',
       'birthday'=> 'dec 25, 1999',
       'nationalityId' => 3,
       'password' => Hash::make('a')));

    }
}