<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DoctorSeeder::class);
        $this->call(NationalitySeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(SpecialtySeeder::class);
    }
}