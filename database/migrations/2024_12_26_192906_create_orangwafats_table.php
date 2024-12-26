<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangwafatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orangwafats', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('nik', 50);
            $table->string('nama_jenazah', 100);
            $table->enum('jk',['Perempuan', 'Laki-Laki']);
            $table->string('alamat_jenazah', 200);
            $table->string('alamat_penjemputan', 200);
            $table->string('tuj_makam', 200);
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
        Schema::dropIfExists('orangwafats');
    }
}
