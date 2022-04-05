<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("temp_lahir");
            $table->date("tgl_lahir");
            $table->string("jk");
            $table->string("agama");
            $table->string("alamat");
            $table->unsignedBigInteger("id_kelurahan");            
            $table->unsignedBigInteger("id_kecamatan");
            $table->unsignedBigInteger("id_provinsi");
            $table->timestamps();
            
            $table->foreign('id_kelurahan')->references('id')->on('kelurahan');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatan');
            $table->foreign('id_provinsi')->references('id')->on('provinsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
