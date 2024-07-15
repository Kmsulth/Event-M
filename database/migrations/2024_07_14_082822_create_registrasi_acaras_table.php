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
    Schema::create('registrasi_acaras', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_penyelenggara'); // Kolom untuk ID penyelenggara
        $table->string('nama_acara');
        $table->string('deskripsi_acara');
        $table->date('tanggal_acara');
        $table->time('jam_mulai');
        $table->time('jam_selesai');
        $table->string('lokasi');
        $table->decimal('harga', 10, 2);
        $table->integer('stok_tiket');
        $table->string('aturan_acara');
        $table->string('banner');
        $table->timestamps();

        // Menambahkan foreign key constraint ke kolom id_penyelenggara
        $table->foreign('id_penyelenggara')->references('id')->on('penyelenggara')->onDelete('cascade');
    });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrasi_acaras');
    }
};
