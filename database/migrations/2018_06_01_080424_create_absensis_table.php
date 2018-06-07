<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_absen');
            $table->unsignedInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('siswas')->ondelete('cascade');
            $table->unsignedInteger('id_keterangan');
            $table->foreign('id_keterangan')->references('id')->on('keterangans')->ondelete('cascade');
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
        Schema::dropIfExists('absensis');
    }
}
