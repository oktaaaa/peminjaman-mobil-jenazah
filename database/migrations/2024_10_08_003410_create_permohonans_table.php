<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {

            $table->uuid('id');
            $table->primary('id');
            $table->string('nik', 50);
            $table->string('nama_pemohon', 100);
            $table->string('nama_jenazah', 100);
            $table->string('alamat_penjemputan', 200);
            $table->string('alamat_tpu', 200);
            $table->date('tanggal_penjemputan');
            $table->time('jam_penjemputan');
            $table->string('no_hp', 15);
            $table->string('catatan', 200);
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
        Schema::dropIfExists('permohonans');
    }
}
