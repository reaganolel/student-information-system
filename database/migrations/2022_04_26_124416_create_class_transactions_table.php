<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_transactions', function (Blueprint $table) {
            $table->bigIncrements('transaction_id');
            $table->Integer('student_id');
            $table->Integer('fee_id');
            $table->Integer('user_id');
            $table->Integer('paid');
            $table->date('transaction_date');
            $table->text('remark');
            $table->text('description');
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
        Schema::dropIfExists('class_transactions');
    }
}
