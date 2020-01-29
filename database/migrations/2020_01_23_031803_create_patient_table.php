<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',255);
            $table->string('middlename',255);
            $table->string('lastname',255);
            $table->bigInteger('phoneNum');
            $table->string('email',255)->unique();
            $table->integer('age');
            $table->string('gender',255);
            $table->string('address',255);
            $table->string('birthday',255);
            $table->string('nationalityId',255);
            $table->string('password',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient');
    }
}
