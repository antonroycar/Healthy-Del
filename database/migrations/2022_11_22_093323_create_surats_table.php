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
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->string('nosurat');
            $table->string('nama');
            $table->string('tempatlahir');
            $table->string('tgllahir');
            $table->string('jenis');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('tanggal');
            $table->string('diagnosa');
            $table->string('mulai');
            $table->string('akhir');
            $table->string('tanggalsurat');
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
        Schema::dropIfExists('surat');
    }
};
