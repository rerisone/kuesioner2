<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMataKuliahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id();   
            $table->bigInteger('id_dosen')->unsigned()->index()->nullable();
            $table->bigInteger('id_mahasiswa')->unsigned()->index()->nullable();
            $table->string('nama_mata_kuliah');
            $table->timestamps();


            // foreign key
            $table->foreign('id_dosen')->
            references('id')->on('dosen')->
            onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_mahasiswa')->
            references('id')->on('mahasiswa')->
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
        Schema::dropIfExists('mata_kuliah');
    }
}
