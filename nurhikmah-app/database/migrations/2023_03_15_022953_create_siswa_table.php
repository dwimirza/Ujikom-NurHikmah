<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->bigInteger('nomorOrtu');
            $table->string('namaOrtu');
            $table->string('kartuKeluarga')->nullable();
            $table->string('akte')->nullable();
            $table->string('buktiPembayaran')->nullable();
            $table->bigInteger("fk_id_siswa")->unsigned();
            $table->foreign("fk_id_siswa")->references("id")->on("users")->onUpdate("cascade")->onDelete("cascade");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}