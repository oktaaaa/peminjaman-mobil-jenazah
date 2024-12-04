<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatuspermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuspermohonans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('permohonan_id')->constrained()->onDelete('cascade');
            $table->enum('status',['Tersedia', 'Tidak tersedia']);
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
        Schema::dropIfExists('statuspermohonans');
    }
}
