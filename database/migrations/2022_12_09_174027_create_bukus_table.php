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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id('isbn')->nullable(false)->unique();
            $table->string('kode_rak_buku', 10)->nullable(false);
            $table->string('judul_buku', 250);
            $table->string('genre_buku', 20);
            $table->string('pengarang_buku', 100);
            $table->string('penerbit_buku', 100);
            $table->string('bahasa_buku', 50);
            $table->foreign('kode_rak_buku')->references('kode_rak_buku')->on('rak_bukus')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
    }
};
