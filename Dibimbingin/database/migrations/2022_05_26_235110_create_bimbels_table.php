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
        Schema::create('bimbel', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('image');
            $table->char('tipe');
            $table->char('alamat');
            $table->char('kontak');
            $table->char('WA');
            $table->char('email');
            $table->text('tentang_kami');
            $table->char('ac_check')->nullable();
            $table->char('snack_check')->nullable();
            $table->char('wifi_check')->nullable();
            $table->char('modul_check')->nullable();
            $table->char('try_check')->nullable();
            $table->char('fleks_check')->nullable();
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
        Schema::dropIfExists('bimbels');
    }
};
