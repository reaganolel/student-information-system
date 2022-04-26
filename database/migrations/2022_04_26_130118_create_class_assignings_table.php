<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassAssigningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_assignings', function (Blueprint $table) {
            $table->bigIncrements('class_assign_id');
            $table->Integer('course_id');
            $table->Integer('level_id');
            $table->Integer('shift_id');
            $table->Integer('classroom_id');
            $table->tinyinteger('batch_id');
            $table->tinyinteger('day_id');
            $table->tinyinteger('time_id');
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
        Schema::dropIfExists('class_assignings');
    }
}
