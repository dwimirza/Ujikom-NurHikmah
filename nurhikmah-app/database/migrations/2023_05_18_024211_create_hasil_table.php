<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->unsigned()->nullable();
            $table->integer('id_materi')->unsigned()->nullable();
//            $table->integer('id_score')->unsigned();
            $table->string('student_name');
            $table->string('materi');
            $table->integer('score');

            $table->boolean("lulus")->nullable();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_materi')->references('id')->on('exam');
//            $table->foreign('id_score')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil');
    }
}
