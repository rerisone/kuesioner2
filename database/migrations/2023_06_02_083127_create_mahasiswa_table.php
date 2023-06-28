<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_users')->unsigned()->index()->nullable();
            $table->bigInteger('id_prodi')->unsigned()->index()->nullable();
            $table->string('nama');
            // $table->string('nama_prodi');
            $table->char('nim',11)->unique();
            $table->enum('jenis_kelamin',['L','P']);
            $table->enum('status_isi',['S','B']);
            $table->timestamps();

            // foreign key
            $table->foreign('id_users')->
            references('id')->on('users')->
            onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_prodi')->
            references('id')->on('prodi')->
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
        Schema::dropIfExists('mahasiswa');
    }
}
