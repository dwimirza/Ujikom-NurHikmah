<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLulusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lulus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("fk_id_lulus")->unsigned();
            $table->string("nama", 255);
            $table->string("nomorOrtu", 255);
            $table->string("namaOrtu", 255);
            $table->string("kartuKeluarga", 255);//foto
            $table->string("akte", 255);//foto
            $table->string("buktiPembayaran", 255);//foto
            $table->foreign("fk_id_lulus")->references("id")->on("users")->onUpdate("cascade")->onDelete("cascade");
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
        Schema::dropIfExists('lulus');
    }
}
