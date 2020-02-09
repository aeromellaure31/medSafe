<?php

use Illuminate\Database\Seeder;
use App\model\AppointmentRequest;
class AppointmentRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AppointmentRequest::create(array('patient_id'=>1,'doctor_id'=>1,'message'=>'my stomach is aching','request'=>1,'Status'=>1));
        AppointmentRequest::create(array('patient_id'=>2,'doctor_id'=>1,'message'=>'my stomach is aching','request'=>1,'Status'=>1));
        AppointmentRequest::create(array('patient_id'=>3,'doctor_id'=>1,'message'=>'my stomach is aching','request'=>0,'Status'=>0));
    }
}