<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassSchedullingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_schedullings', function (Blueprint $table) {
            $table->bigIncrements('schedule_id');
            $table->Integer('course_id');
            $table->Integer('level_id');
            $table->Integer('shift_id');
            $table->tinyinteger('classroom_id');
            $table->tinyinteger('batch_id');
            $table->tinyinteger('day_id');
            $table->tinyinteger('time_id');
            $table->tinyinteger('teacher_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->tinyinteger('status')->dafaults(1);
            $table->softDeletes();
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
        Schema::dropIfExists('class_schedullings');
    }
}
