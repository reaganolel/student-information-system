<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('role_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->integer('father_phone');
            $table->string('mother_name');
            $table->integer('mother_phone');
            $table->string('gender');
            $table->string('email')->unique();
            $table->date('dob');
            $table->integer('phone');
            $table->text('address');
            $table->text('current_address');
            $table->string('nationality');
            $table->text('passport');
            $table->tinyinteger('status')->default(0);
            $table->date('dateregistered');
            $table->integer('user_id');
            $table->integer('class_id');
            $table->string('image')->nullable();
            $table->softDeletes();
            $table->timeStamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissions');
    }
}
