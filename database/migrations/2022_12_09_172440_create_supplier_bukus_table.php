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
        Schema::create('supplier_bukus', function (Blueprint $table) {
            $table->string('id_supplier', 50)->primary()->unique()->nullable(false);
            $table->string('nama_supplier', 100);
            $table->bigInteger('nomor_supplier');
            $table->string('alamat_supplier', 250);
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
        Schema::dropIfExists('supplier_bukus');
    }
};
