<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('student_id')->default('');


          //  $table->string('name');
            $table->string('dob');
            $table->string('college_name');
            $table->string('degree');
            $table->string('city');
            $table->string('state');
            $table->string('speciality');
           // $table->string('role');
            $table->integer('zipcode');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            
        });
    }
};
