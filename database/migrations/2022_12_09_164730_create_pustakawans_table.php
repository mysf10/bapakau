<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pustakawans', function (Blueprint $table) {
            $table->string('kode_pegawai', 10)->primary()->unique()->nullable(false);
            $table->string('nama_pegawai', 100);
            $table->bigInteger('nomor_pegawai');
            $table->string('alamat_pegawai', 250);
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
        Schema::dropIfExists('pustakawans');
    }
};
