<?php

use Illuminate\Database\Seeder;
use App\model\Specialties;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialties::create(['specialties'=>'Dentist']);
        Specialties::create(['specialties'=>'Neuro']);
    }
}
