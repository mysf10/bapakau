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
        Schema::create('perpustakaans', function (Blueprint $table) {
            $table->string('id_perpustakaan', 50)->primary()->nullable(false)->unique();
            $table->string('kode_transaksi', 10)->nullable(false);
            $table->string('nama_perpustakaan', 150);
            $table->string('alamat_perpustakaan', 250);
            $table->foreign('kode_transaksi')->references('kode_transaksi')->on('transaksis')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('perpustakaans');
    }
};
