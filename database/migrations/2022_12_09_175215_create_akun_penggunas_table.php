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
        Schema::create('akun_penggunas', function (Blueprint $table) {
            $table->id('id_akun', 10)->nullable(false)->unique();
            $table->string('nim',15);
            $table->string('nomor_telephone', 50);
            $table->string('email_akun', 100);
            $table->string('username_akun', 100);
            $table->string('password_akun', 100);
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
        Schema::dropIfExists('akun_penggunas');
    }
};
