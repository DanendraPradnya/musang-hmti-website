<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel pendaftarans.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('kontak');
            $table->string('profile_photo');
            $table->string('krm_dokumen');
            $table->string('kepanitiaan_dokumen');
            $table->timestamps();
        });
    }

    /**
     * Membalik migrasi tabel pendaftarans.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
