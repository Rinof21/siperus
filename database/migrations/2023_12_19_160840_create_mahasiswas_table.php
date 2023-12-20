<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string('nim',11);
            $table->string('nama_lengkap',128);
            $table->string('tempat_lahir',128);
            $table->date('tgl_lahir');
            $table->integer('prodi_id');
            $table->string('alamat',256);
            $table->string('no_hp',13);
            $table->integer('agama');
            $table->string('agamaa',128);
            $table->string('jk',128);
            $table->string('nama_ayah',128);
            $table->string('nama_ibu',128);
            $table->string('program',128);
            $table->string('tahun_angkatan',128);
            $table->integer('status_aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
