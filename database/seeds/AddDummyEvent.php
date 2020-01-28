<?php

use App\Event;
use Illuminate\Database\Seeder;

class AddDummyEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['title'=>'Rom Event', 'start'=>'2017-05-10', 'end'=>'2017-05-15'],
        	['title'=>'Coyala Event', 'start'=>'2017-05-11', 'end'=>'2017-05-16'],
        	['title'=>'Lara Event', 'start'=>'2017-05-16', 'end'=>'2017-05-22'],
        ];

        foreach ($data as $key => $value) {
        	Event::create($value);
        }
    }
}
