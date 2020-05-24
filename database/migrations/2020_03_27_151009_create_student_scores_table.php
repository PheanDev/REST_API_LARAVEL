<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_scores', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('student_id')->unsigned()->index();
            $table->foreign('student_id')->references('sid')->on('students')->onDelete('cascade');
            $table->double('math',8,2);
            $table->double('khmer',8,2);
            $table->double('physic',8,2);
            $table->double('chemistry',8,2);
            $table->double('biology',8,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_scores');
    }
}
