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
        Schema::create('beasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('image');
            $table->char('tipe');
            $table->char('alamat');
            $table->char('kontak');
            $table->integer('WA');
            $table->char('email');
            $table->text('tentang_kami');
            $table->text('syarat');
            $table->text('registrasi');
            $table->text('info');
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
        Schema::dropIfExists('beasiswa');
    }
};
