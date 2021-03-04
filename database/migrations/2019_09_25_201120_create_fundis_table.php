<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundis', function (Blueprint $table) {

            $table->increments('id');
            $table->string('idNumber');
            $table->string('image');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('dob');
            $table->string('address')->nullable();
            $table->double('address_latitude')->nullable();
            $table->double('address_longitude')->nullable();
            $table->string('phoneNumber');
            $table->string('occupation');
            $table->string('ratings');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fundis');
    }
}
