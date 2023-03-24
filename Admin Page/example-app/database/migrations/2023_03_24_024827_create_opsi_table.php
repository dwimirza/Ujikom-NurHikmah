<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpsiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opsi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("fk_id_opsi")->unsigned();
            $table->enum("kunciJawaban", ["A", "B", "C", "D"]);
            $table->foreign("fk_id_opsi")->references("id")->on("soal")->onUpdate("cascade")->onDelete("cascade");
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
        Schema::dropIfExists('opsi');
    }
}
