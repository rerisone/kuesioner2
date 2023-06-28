<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kategori')->unsigned()->index()->nullable();
            $table->bigInteger('id_kuesioner')->unsigned()->index()->nullable();
            $table->bigInteger('id_prodi')->unsigned()->index()->nullable();
            $table->string('pertanyaan');
            $table->timestamps();

            // foreign key
            $table->foreign('id_kategori')->
            references('id')->on('kategori')->
            onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_kuesioner')->
            references('id')->on('kuesioner')->
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
        Schema::dropIfExists('pertanyaan');
    }
}
