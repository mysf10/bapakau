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
            $table->string('id_akun', 50)->primary()->nullable(false)->unique();
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
