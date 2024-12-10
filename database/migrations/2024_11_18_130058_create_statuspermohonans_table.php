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

            $table->unsignedBigInteger('permohonan_id'); // Ensure the column exists before the constraint

            // Add the foreign key constraint
            $table->foreign('permohonan_id')->references('id')->on('permohonans')->onDelete('cascade');
            $table->enum('status', ['tersedia', 'tidak tersedia']);
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
