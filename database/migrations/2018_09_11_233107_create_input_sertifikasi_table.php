<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputSertifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_sertifikasi', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->string('karyawan_nik',7);
            $table->foreign('karyawan_nik')->references('nik')->on('karyawan')->onDelete('cascade');
            $table->unsignedInteger('jenis_sertifikasi_id')->nullable();
            $table->foreign('jenis_sertifikasi_id')->references('id')->on('jenis_sertifikasi')->onDelete('cascade');
            $table->string('masa_berlaku');
            $table->string('upload')->nullable()->default(null);
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
        Schema::dropIfExists('input_sertifikasi');
    }
}
