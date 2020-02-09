<?php

use Illuminate\Database\Seeder;
use App\model\Nationalities;
class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nationalities::create(['nationalities'=>'Filipino']);
        Nationalities::create(['nationalities'=>'American']);
        Nationalities::create(['nationalities'=>'Irish']);
        Nationalities::create(['nationalities'=>'Nigerian']);
        // factory(Nationalities::class, 10)->create();
    }
}