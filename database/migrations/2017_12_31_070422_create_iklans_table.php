<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIklansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iklans', function (Blueprint $table) {
            $table->increments('id');
             $table->string('kondisi');
            $table->string('transmisi');
            $table->string('bahanbakar');
            $table->integer('tahunkeluar');
            $table->string('warna');
            $table->string('deskripsi');
            $table->string('harga');
            $table->string('keterangan');

            $table->integer('fotos_id')->unsigned();
            $table->integer('mereks_id')->unsigned();
            $table->integer('tipes_id')->unsigned();
            $table->integer('pemasangs_id')->unsigned();
            $table->timestamps();

            $table->foreign('fotos_id')->references('id')->on('fotos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('mereks_id')->references('id')->on('merekks')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('tipes_id')->references('id')->on('tipes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pemasangs_id')->references('id')->on('pemasangs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iklans');
    }
}
