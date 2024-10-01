<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supirs', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');

            $table->string('nik', 50);
            $table->string('nama', 50);
            $table->string('alamat', 50);
            $table->string('tgl_lahir', 50);
            $table->string('no_hp', 50);
            $table->enum('jk',['Perempuan', 'Laki-Laki']);

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
        Schema::dropIfExists('supirs');
    }
}
