<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kategori')->unsigned()->index()->nullable();
            $table->bigInteger('id_mahasiswa')->unsigned()->index()->nullable();
            $table->bigInteger('id_periode')->unsigned()->index()->nullable();
            $table->bigInteger('id_pertanyaan')->unsigned()->index()->nullable();
            $table->bigInteger('id_prodi')->unsigned()->index()->nullable();
            $table->bigInteger('id_kuesioner')->unsigned()->index()->nullable();
            $table->bigInteger('skala');
            $table->string('keterangan_skala');
            $table->timestamps();

            // foreign key
            $table->foreign('id_kategori')->
            references('id')->on('kategori')->
            onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_mahasiswa')->
            references('id')->on('mahasiswa')->
            onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_periode')->
            references('id')->on('periode')->
            onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_pertanyaan')->
            references('id')->on('pertanyaan')->
            onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_prodi')->
            references('id')->on('prodi')->
            onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_kuesioner')->
            references('id')->on('kuesioner')->
            onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban');
    }
}
