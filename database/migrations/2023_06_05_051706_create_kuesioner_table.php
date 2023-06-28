<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioner', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_periode')->unsigned()->index()->nullable();
            $table->bigInteger('id_prodi')->unsigned()->index()->nullable();
            $table->string('nama_kuesioner');
            $table->enum('status',['Approved','Menunggu Approval','Perlu Aksi','Aktif','Tidak Aktif']);
            $table->timestamps();

            // foreign key
            $table->foreign('id_periode')->
            references('id')->on('periode')->
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
        Schema::dropIfExists('kuesioner');
    }
}
